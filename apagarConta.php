<?php 	
	session_start();

	$email = $_SESSION['email'];
	$host = "mysql:host=localhost;dbname=bd_cronomax";
	$user = "root";
	$pass = "";

		
	$pdo = new PDO($host, $user, $pass);	

	$stmt = $pdo->prepare("DELETE FROM tbl_cliente WHERE email_cliente = '$email'");

	$stmt->execute();
	session_destroy();
	header("location:cadastro.php")
 ?>