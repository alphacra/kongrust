<?php
include('db.config.php'); 

$dsn = "mysql:host=$host;port=3306;dbname=$database";

try {
$db = new PDO($dsn, $username, $password,
array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
global $db;
} catch(PDOException $e) {
	die('ERROR: '.$e->getMessage());
}
date_default_timezone_set('UTC');
 ?>