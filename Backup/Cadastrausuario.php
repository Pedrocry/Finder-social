<?php 
include_once 'CadUser.php';

$nome=$_POST['nome'];
$idade=$_POST['idade'];
$local=$_POST['local'];
$genero=$_POST['genero'];
$estv=$_POST['estv'];
$interesse=$_POST['interesse'];
$email=$_POST['email'];
$senha=$_POST['senha'];

	$novoUser=new CadUser();
	$novoUser->setreceberLogin($nome,$idade,$local,$genero,$estv,$interesse,$email,$senha);

	session_start();
	$_SESSION['email']=$_POST ['email'];
	$_SESSION['senha']=$_POST ['senha'];
	$_SESSION['nome']=$_POST ['nome'];


 		header("Location:upload_image.php");

 /*
	if(isset($_SESSION["email"]) ||isset($_SESSION["senha"])){
// echo"ola seja bem vindo!!!";

		}else{
		header("Location:index.php");
		exit; 
	}

*/
	
		
?>
