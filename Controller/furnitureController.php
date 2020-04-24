<?php

include_once '../../Model/products/Book.php';
include_once '../../Model/products/Disc.php';
include_once '../../Model/products/Furniture.php';

class furnitureController{
  //method adds inputed data from user to database
  static function addData($sku,$name,$price,$height,$width,$lenght){
    $product = new Furniture($sku,$name,$price,$height,$width,$lenght);
    $con = Dbh::getLink();
    //This code is adding main data into product table
    $sqlMain = "INSERT into product(sku,name,price,type) VALUES(:sku,:name,:price,:type);";
    $stmtMain = $con->prepare($sqlMain);
    $data = array('sku'=>$product->getSku(),'name'=>$product->getName(),'price'=>$product->getPrice(),'type'=>$product->getType());
    $stmtMain->execute($data);
    //This code is adding additional data, that parent does not have, into furniture table
    $sqlAdt = "SELECT id from product WHERE sku = :sku and name = :name and type = :type;";
		$stmtAdt = $con->prepare($sqlAdt);
    $stmtAdt->execute(array('sku'=>$product->getSku(),'name'=>$product->getName(),'type'=>$product->getType()));
		if($row = $stmtAdt->fetch()){
				$newId = $row['id'];
				$sql = "INSERT into furniture(productId,height,lenght,width) VALUES(:id,:height,:lenght,:width);";
				$stmt = $con->prepare($sql);
			  $stmt->execute(array('id'=>$newId,'height'=>$product->getHeight(),'width'=>$product->getWidth(),'lenght'=>$product->getLenght()));
		}
  }
}
