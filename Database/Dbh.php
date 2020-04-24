<?php

abstract class Dbh{
  //Single database client instance
  private static $link;

  //Disable creating new connection to database
  private function __construct(){}

  //Create instante of database client
  public static function getLink(){
    if(is_null(static::$link)){
      $host = "localhost";
      $user = "root";
      $password = "";
      $dbname = "products";
      $dsn = "mysql:host=$host;dbname=$dbname";

      //create PDO connection and set fetch method
      static::$link = new PDO($dsn,$user,$password);
      static::$link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
      }
      return static::$link;
  }

  //disabele cloninh
  final public function __clone(){
    throw new Exception('Feature disabled.');
  }

  //disable wakeup of class
  final public function __wakeup(){
    throw new Exception('Feature disabled.');
  }
}
