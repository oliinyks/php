<?php

require_once 'classes/Product.php';
require_once 'classes/AccessoryProduct.php';
require_once 'classes/PhoneProduct.php';

$phone = new PhoneProduct("Apple 13", "12000", "yes", "A9", "64", "5.5");
$accessory = new AccessoryProduct("Case", "400", "yes", "safe", "Apple 14");

echo $phone->getInfo();
echo $accessory->getInfo();

echo "<br>";
echo Product::getCount();