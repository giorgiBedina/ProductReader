<?php

include_once 'Product.php';

class Disc extends Product{
	private $size;

	public function __construct($sku,$name,$price,$size){
		parent::__construct($sku,$name,$price);
		$this->size = $size;
		$this->type = "disc";//Sets parent's type
	}

	public function getSize(){
		return $this->size;
	}

	public function setSize($size){
		$this->weight = $size;
	}
}
