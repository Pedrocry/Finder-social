<?php 
 include 'BD.php';
session_start();
$_SESSION['img'];
$email=$_SESSION['email'];
$senha=$_SESSION['senha'];
$nome=$_SESSION['nome'];
  

if(isset($_SESSION["email"]) ||isset($_SESSION["senha"])){
// echo "Logado".$img;
// echo "Sessao".$img;

}else{
echo "Nao Logado";
exit; 
}

?>

<?php

if($_SESSION['img']!=1 and $_SESSION['img']!=2){
mkdir("users/$email");
}


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

// $sql= mysql_query ("SELECT * FROM  usuarios WHERE email= '$email' and senha='$senha'")or die (mysql_error());

//$sql= mysql_query("UPDATE  `usuarios-voo`.`usuarios` SET  `on-of` =  'on' WHERE  `usuarios`.`id` =$id;") or die (mysql_error());
/*
if ($_SESSION['img']==0) {
	$img='url_img';
}
if ($_SESSION['img']==1) {
	$img='url_img1';
}
if ($_SESSION['img']==2) {
	$img='url_img2';
}
*/
$conn = getConnection();
$imp="UPDATE usuarios SET url_img=? WHERE email=? AND senha=?";
$sql =$imp;  //tm pode ser* : desc; : qtd;:valor

$stmt = $conn->prepare($sql);    //´podemos passar apenas a value $pdo
$stmt->bindParam(1,$file_dir);    // * pode ser tbm :desc
$stmt->bindParam(2,$email);   // * :qtd
$stmt->bindParam(3,$senha); 

if ($stmt->execute()) {
	echo'Atualizado!!!';
	

		// atribuicao de sessao
	$_SESSION['img']=$_SESSION['img']+1;
	$img=$_SESSION['img'];
	echo'  <br> '.$img;

	if ($_SESSION['img']==2) {
			unset( $_SESSION['img']);
			header("Location:principal.php");
	}
	header("Location:upload_image.php");
}else{echo'Falha na atualização!!!';}



?>