<?php

class AccessoryProduct extends Product
{
	public $purpose;
	public $compatibility;

	public function __construct($name, $price, $available, $purpose, $compatibility)
	{
		parent::__construct($name, $price, $available);

		$this->purpose = $purpose;
		$this->compatibility = $compatibility;
	}

	public function getInfo()
	{
		$info = parent::getInfo();
		$info .= "
		<p>Purpose: $this->purpose</p>
		<p>Compatibility: $this->compatibility</p>
		";
		return $info;
	}
}