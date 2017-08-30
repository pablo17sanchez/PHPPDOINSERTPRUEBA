<?php 


$cdn='mysql:dbname=tiendaonline;host=localhost';

$user='root';
$password='12345678';

try {
	
$pdo= new PDO($cdn,$user,$password);



} catch (Exception $e) {

echo "Error: ".$e->getMessage();

	
} 

echo "Conectado ";


 ?>