<?php

class PhoneProduct extends Product
{
	public $cpu;
	public $memory;
	public $screen;

	public function __construct($name, $price, $available, $cpu, $memory, $screen)
	{
		parent::__construct($name, $price, $available);

		$this->cpu = $cpu;
		$this->memory = $memory;
		$this->screen = $screen;
	}

	public function getInfo()
	{
		$info = parent::getInfo();
		$info .= "
		<p>CPU: $this->cpu</p>
		<p>Memory: $this->memory</p>
		<p>Screen: $this->screen</p>
		";
		return $info;
	}
} 