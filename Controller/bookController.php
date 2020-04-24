<?php

include_once '../../Model/products/Book.php';
include_once '../../Model/products/Disc.php';
include_once '../../Model/products/Furniture.php';

class bookController{
  //method adds inputed data from user to database
  public static function addData($sku,$name,$price,$weight){
    $product = new Book($sku,$name,$price,$weight);
    $con = Dbh::getLink();
    //This code is adding main data into product table
    $sqlMain = "INSERT into product(sku,name,price,type) VALUES(:sku,:name,:price,:type);";
    $stmtMain = $con->prepare($sqlMain);
    $data = array('sku'=>$product->getSku(),'name'=>$product->getName(),'price'=>$product->getPrice(),'type'=>$product->getType());
    $stmtMain->execute($data);
    //This code is adding additional data, that parent does not have, into book table
    $sqlAdt = "SELECT id from product WHERE sku = :sku and name = :name and type = :type;";
		$stmtAdt = $con->prepare($sqlAdt);
    $stmtAdt->execute(array('sku'=>$product->getSku(),'name'=>$product->getName(),'type'=>$product->getType()));
		if($row = $stmtAdt->fetch()){
				$newId = $row['id'];
				$sql = "INSERT into book(productId,weight) VALUES(:id,:weight);";
				$stmt = $con->prepare($sql);
			  $stmt->execute(array('id'=>$newId,'weight'=>$product->getWeight()));
		}
  }
}
