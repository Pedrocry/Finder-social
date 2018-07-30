<?php 
include_once 'BD.php';
$email=$_POST['email'];
$senha=$_POST['senha'];


	$conn = getConnection();

$sql="SELECT* FROM usuarios WHERE email= ? AND senha=?";
	$stmt=$conn->prepare($sql);
	$stmt->bindParam(1,$email);
	$stmt->bindParam(2,$senha);
	$stmt->execute();
	$result=$stmt->fetchAll();

if($result){echo "Dados!!!";}else{echo "Email ou senha  não encontrados";}

foreach ($result as $value) {
	session_start();
	$_SESSION['email']=$value ['email'];
	$_SESSION['senha']=$value ['senha'];
	$_SESSION['nome']=$value ['nome'];
	$_SESSION['img']=$value ['url_img'];
	header("Location:principal.php");
	}
?>
