<?php 
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','root');
	define('DATABASE','alfa-test');
	
$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);	
	
if (!$connect) {
    die('Error connect to database!');
}	
	
	
	
	
?>