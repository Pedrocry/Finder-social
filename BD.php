<?php
function getConnection(){
$dns = "mysql:host=localhost;dbname=id4142566_limer;charset=utf8";  //Caherset para caracteres especciaus.
$user="id4142566_limer";
$pass="qwe123";
$pdo=new PDO ($dns,$user,$pass);
try{
	$pdo=new PDO ($dns, $user, $pass);
	return $pdo;
	} catch (PDOExeption $ex){
//	echo 'Erro  '.$ex->getMessage();

		}

}
?>