<?php
function getConnection(){

$dns = "mysql:host=localhost;dbname=finder;charset=utf8";  //Caherset para caracteres especciaus.
$user="root";
$pass="";
$pdo=new PDO ($dns,$user,$pass);

try{
	$pdo=new PDO ($dns, $user, $pass);
	return $pdo;
	} catch (PDOExeption $ex){
	echo 'Erro  '.$ex->getMessage();

		}

}
?>


