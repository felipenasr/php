<?php 

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "33922251oi");
	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");


	$id = 1;
	$stmt->bindParam(":ID",$id);


	$stmt->execute();

?>