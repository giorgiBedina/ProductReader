<?php
include_once '../../Database/Dbh.php';

class deleteController extends Dbh{
    //this mothod deletes data from database, based on product id
    public static function delete($id){
        $con = Dbh::getLink();
        $sql = "SELECT type FROM product where id = $id;";
        $result = $con->query($sql);
        while($row = $result->fetch()){
            $table = $row['type'];
            $sqlR = "DELETE FROM product WHERE id = $id;";
            $con->query($sqlR);
            $sqlRe = "DELETE FROM $table WHERE productId = $id";
            $con->query($sqlRe);
        }
    }
    
}