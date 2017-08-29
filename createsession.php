<?php 
$password = $_POST["password"];
$email = $_POST["email"];
$_SESSION["eml"] = $email;
$_SESSION["psw"] = $password;
@header("Location:/blog.php");
?>