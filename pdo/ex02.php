<?php 

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWD)");

	$sabrina = "Sabrina";
	$passwd = "!@#$";

	$stmt->bindParam(":LOGIN",$sabrina);
	$stmt->bindParam(":PASSWD",$passwd);


	$stmt->execute();
?>