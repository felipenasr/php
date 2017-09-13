<?php 
 	$conn = new mysqli("localhost", "root", "", "dbphp7");

	if($conn->connect_error){
		echo "ERROR: " . $conn->connect_error;
	}

	$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");

	$data = array();
	while($row = $result->fetch_assoc()){
		array_push($data, $row);
	}
	$data = json_encode($data);

	echo $data;
?>