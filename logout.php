<?php
@ob_start();
session_start();



include_once 'BD.php';

$_SESSION['nome'];
$_SESSION['email'];
$_SESSION['senha'];
$id=$_SESSION['url_img'];
session_destroy();
header("Location:index.php");
exit;
?>



