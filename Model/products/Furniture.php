<?php

include_once 'Product.php';

class Furniture extends Product{
	private $height;
	private $width;
	private $lenght;

	public function __construct($sku,$name,$price,$height,$width,$lenght){
		parent::__construct($sku,$name,$price);
		$this->height = $height;
		$this->width = $width;
		$this->lenght = $lenght;
		$this->type = "furniture";//Sets parent's type
	}

	public function getHeight(){
		return $this->height;
	}

	public function getLenght(){
		return $this->lenght;
	}

	public function getWidth(){
		return $this->width;
	}

	public function setHeight($height){
		$this->height = $height;
	}

	public function setLenght($lenght){
		$this->lenght = $lenght;
	}

	public function setWidth($width){
		$this->width = $width;
	}
}
