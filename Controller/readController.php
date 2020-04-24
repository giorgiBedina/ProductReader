<?php

include_once '../../Model/products/Book.php';
include_once '../../Model/products/Disc.php';
include_once '../../Model/products/Furniture.php';

class readController{
  //Method is reading data from database and creates product object
  public static function read($id,$type){
    $con = Dbh::getLink();
    $sql = "SELECT * FROM product WHERE id = $id;";
    $result = $con->query($sql);
    if($row = $result->fetch()){
      //creates object based on what kind of products are in database
      switch ($type) {
        case 'disc':
          $sqli = "SELECT * FROM disc where productId = $id;";
          $resulti = $con->query($sqli);
          $rowi = $resulti->fetch();
          $product = new Disc($row['sku'],$row['name'],$row['price'],$rowi['size']);
        break;
        case 'furniture':
          $sqli = "SELECT * FROM furniture where productId = $id;";
          $resulti = $con->query($sqli);
          $rowi = $resulti->fetch();
          $product = new Furniture($row['sku'],$row['name'],$row['price'],$rowi['height'],$rowi['width'],$rowi['lenght']);
        break;
        case 'book':
          $sqli = "SELECT * FROM book where productId = $id;";
          $resulti = $con->query($sqli);
          $rowi = $resulti->fetch();
          $product = new Book($row['sku'],$row['name'],$row['price'],$rowi['weight']);
        break;
      }
    }
    return $product;
  }
}
