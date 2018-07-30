<?php

include_once 'BD.php';


session_start();
$nome=$_SESSION['nome'];
$email=$_SESSION['email'];
$senha=$_SESSION['senha'];
$id=$_SESSION['url_img'];

session_destroy();
header("Location:index.php");
exit;
?>



