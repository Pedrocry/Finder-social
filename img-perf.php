<?php
@ob_start();
session_start();

 include 'BD.php';
$_SESSION['img'];
$email=$_SESSION['email'];
$senha=$_SESSION['senha'];
$nome=$_SESSION['nome'];
  

if(isset($_SESSION["email"]) ||isset($_SESSION["senha"])){
 echo "Logado";

}else{
echo "Nao Logado";
exit; 
}

?>

<?php

mkdir("users/$email");



$erro = $config = array();

// Busca arquivo e prepara para upload
$arquivo = isset($_FILES["image"]) ? $_FILES["image"] : FALSE;

{
// ler extensão de arquivo
preg_match("/\.(gif|bmp|png|jpg|jpeg|exe|zip|txt|mp3|mpg|wav|wma|doc|xls|ppt|htm){1}$/i", $arquivo["name"], $ext);


// Renomear arquivo para evitar quebras
$file_nome = md5(uniqid(time())) . "." . $ext[1];

// upload e registro de pasta
$file_dir = "users/$email/" . $file_nome;

// Upload e alocação de arquivo
move_uploaded_file($arquivo["tmp_name"], $file_dir);

// Mensagem de envio de arquivo

}


$conn = getConnection();

if ($_SESSION['img']==0) {
	echo"Sesaao 000";
	$sql="UPDATE usuarios SET url_img=? WHERE email=? AND senha=?"; 
}
if ($_SESSION['img']==1) {
	echo"Sesaao 001";
	$sql="UPDATE usuarios SET url_img1=? WHERE email=? AND senha=?"; 
}
if ($_SESSION['img']==2) {
	echo"Sesaao 002";
	$sql="UPDATE usuarios SET url_img2=? WHERE email=? AND senha=?"; 
}


$stmt = $conn->prepare($sql);    //´podemos passar apenas a value $pdo
$stmt->bindParam(1,$file_dir);    // * pode ser tbm :desc
$stmt->bindParam(2,$email);   // * :qtd
$stmt->bindParam(3,$senha); 

if ($stmt->execute()) {
	echo'Atualizado!!!';
	$_SESSION['img']=$_SESSION['img']+1;
	if ($_SESSION['img']==3 or $_SESSION['img']>2) {
		unset( $_SESSION['img']);
		header("Location:principal.php");
		exit;
	}else{ header("Location:upload_image.php");
}
	
	
}else{echo'Falha na atualização!!!';}



?>