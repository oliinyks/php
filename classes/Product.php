<?php

class Product
{
	public $name;
	public $price;
	public $available;
	public static $count = 0;

	public function __construct($name, $price, $available)
	{
		$this->name = $name;
		$this->price = $price;
		$this->available = $available;
		self::$count++;
	}

	public function getInfo(){
		return "
		<p>Name: $this->name</p>
		<p>Price: $this->price</p>
		<p>Available: $this->available</p>
		";
	}

	public static function getCount(): string
	{
		return "Quantity of all products: " . self::$count;
	}
}