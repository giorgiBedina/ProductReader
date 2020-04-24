<?php

include_once '../../Controller/readController.php';

class readList{
  //Method reads and outputs data list from database to users
  public static function readData($id,$type){
    $product = readController::read($id,$type);
    echo "<div class='box'>";?>
    <input class="delete" type="checkbox" name="list[]" value=<?php echo $id ?>> <!-- make checkbox value a product id to delete product info later -->
    <?php
    echo '<div class="info">'.
    '<p>'.$product->getSku().'</p>'.'<br>'.
    '<p>'.$product->getName().'</p>'.'<br>'.
    '<p>'.$product->getPrice().'</p>'.'<br>';
    switch ($type) {
      case 'disc':
      echo
      '<p>'.'Size: '.$product->getSize().'</p>'.'<br>'.
      '</div>'.
      '</div>';
      break;

      case 'furniture':
      echo
      '<p>'.'Dimension: '.$product->getHeight().'x'.$product->getWidth().'x'.$product->getLenght().'</p>'.'<br>'.
      '</div>'.
      '</div>';
      break;

      case 'book':
      echo
      '<p>'.'Weight: '.$product->getWeight().'</p>'.'<br>'.
      '</div>'.
      '</div>';
      break;
    }
  }
}
