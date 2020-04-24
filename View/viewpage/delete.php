<?php
//deletes product based on checkbox value, which is equal to product id
if(isset($_POST['delete'])){
  include_once '../../Controller/deleteController.php';
  if(!empty($_POST['list'])){
    foreach($_POST['list'] as $id){
      deleteController::delete($id);

      header("Location: ../../public/pages/list.php?delete=success");
    }
  }
}
else {
  echo "empty";
}
