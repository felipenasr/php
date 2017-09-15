<?php 

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
	
	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?");


	$id = 4;

	$stmt->bindParam(":ID",$id);


	$stmt->execute(array($id));

	// cancelando operação
	// $conn->rollback();

	// confirmando operacao
	$conn->commit();

?>