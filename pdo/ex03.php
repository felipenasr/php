<?php 

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
	

	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWD WHERE idusuario = :ID");


	$sabrina = "teste";
	$passwd = "testes";
	$id = 3;

	$stmt->bindParam(":LOGIN",$sabrina);
	$stmt->bindParam(":PASSWD",$passwd);
	$stmt->bindParam(":ID",$id);


	$stmt->execute();

?>