<?php ob_start();

define('DB_HOST', "mariadb");
define('DB_USER', "root");
define('DB_PASS', "hooyo123");
define('DB_NAME', "cms");


$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}








?>