<?php

include_once '../../Model/products/Book.php';
include_once '../../Model/products/Disc.php';
include_once '../../Model/products/Furniture.php';

class discController{
  //method adds inputed data from user to database
  public static function addData($sku,$name,$price,$size){
    $product = new Disc($sku,$name,$price,$size);
    $con = Dbh::getLink();
    //This code is adding main data into product table
    $sqlMain = "INSERT into product(sku,name,price,type) VALUES(:sku,:name,:price,:type);";
    $stmtMain = $con->prepare($sqlMain);
    $data = array('sku'=>$product->getSku(),'name'=>$product->getName(),'price'=>$product->getPrice(),'type'=>$product->getType());
    $stmtMain->execute($data);
    //This code is adding additional data, that parent does not have, into disc table
    $sqlAdt = "SELECT id from product WHERE sku = :sku and name = :name and type = :type;";
		$stmtAdt = $con->prepare($sqlAdt);
    $stmtAdt->execute(array('sku'=>$product->getSku(),'name'=>$product->getName(),'type'=>$product->getType()));
		if($row = $stmtAdt->fetch()){
				$newId = $row['id'];
				$sql = "INSERT into disc(productId,size) VALUES(:id,:size);";
				$stmt = $con->prepare($sql);
			  $stmt->execute(array('id'=>$newId,'size'=>$product->getSize()));
		}
  }
}
