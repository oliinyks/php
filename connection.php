<?php

$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');

try{
	$db = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e){
	echo $e->getMessage();
}
// https://www.youtube.com/watch?v=BYRx3rkOZ9I

// https://www.youtube.com/watch?v=5F_29NPjroA
// mamp / free or for maney
// XAMP
// composer
// https://www.youtube.com/watch?v=ISjQfl5uHsA