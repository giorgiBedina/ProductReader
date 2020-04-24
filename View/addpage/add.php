<?php

if(isset($_POST['save'])){
  $sku = $_POST['sku'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  if(empty($sku)||empty($name)||empty($price)){
    header("Location: ../../public/pages/add.php?add=empty");
  }
  else{
    if($_POST['select']=='disc'){
        $size = $_POST['discSize'];
        if(empty($size)){
          header("Location: ../../public/pages/add.php?size=empty");
        }
        else{
          include_once '../../Controller/discController.php';
          discController::addData($sku,$name,$price,$size);
          header("Location: ../../public/pages/add.php?add=success");
        }
      }

    if($_POST['select']=='furniture'){
      $width = $_POST['width'];
      $height = $_POST['height'];
      $lenght = $_POST['lenght'];
      if(empty($width)||empty($height)||empty($lenght)){
        header("Location: ../../public/pages/add.php?dimension=empty");
      }

      else{
        include_once '../../Controller/furnitureController.php';
        furnitureController::addData($sku,$name,$price,$height,$width,$lenght);
        header("Location: ../../public/pages/add.php?add=success");
      }
    }

    if($_POST['select']=='book'){
      $weight = $_POST['bookWeight'];
      if(empty($weight)){
        header("Location: ../../public/pages/add.php?weight=empty");
      }
      else{
        include_once '../../Controller/bookController.php';
        bookController::addData($sku,$name,$price,$weight);
        header("Location: ../../public/pages/add.php?add=success");
      }
    }
  }
}
else{
  header("Location: ../../public/pages/add.php?add=error");
}
