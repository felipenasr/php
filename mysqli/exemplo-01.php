<?php 
	

	$conn = new mysqli("localhost", "root", "", "dbphp7");

	if($conn->connect_error){
		echo "ERROR: " . $conn->connect_error;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

	$stmt->bind_param("ss", $login, $pass);

	$login = "felipe";
	$pass = "123456";
	
	$stmt->execute();

	$login = "root";
	$pass = "chrome	";
	
	$stmt->execute();

?>