<?php

include_once '../../Database/Dbh.php';

abstract class Product extends Dbh{
	protected $sku;
	protected $name;
	protected $price;
	protected $type;//Only child class can set type

	protected function __construct($sku,$name,$price){
		$this->sku = $sku;
		$this->name = $name;
		$this->price = $price;
	}

	public function getSku(){
		return $this->sku;
	}

	public function getName(){
		return $this->name;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setSku($sku){
		$this->sku = $sku;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getType(){
		return $this->type;
	}

}
