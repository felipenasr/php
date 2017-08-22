<?php

	$pessoa = array(
		'nome' => 'Felipe',
		'idade' => 20
		);
	print_r($pessoa);
	
	foreach($pessoa as &$value){
		if(gettype($value) === 'integer') $value+=10;
		echo $value.'<br>';
	}

	print_r($pessoa);
?>