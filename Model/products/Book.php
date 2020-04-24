<?php

include_once 'Product.php';

class Book extends Product{
	private $weight;

	public function __construct($sku,$name,$price,$weight){
		parent::__construct($sku,$name,$price);
		$this->weight = $weight;
		$this->type = "book";//Sets parent's type
	}

	public function getWeight(){
		return $this->weight;
	}

	public function setWeight($weight){
		$this->weight = $weight;
	}
}
