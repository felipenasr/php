<?php 
	$pessoas = array();

	array_push($pessoas, array(
		"nome" => "felipe",
		"idade" => 22
		));
	array_push($pessoas, array(
		"nome" => "marcus",
		"idade" => 25
		));

	echo json_encode($pessoas);
?>