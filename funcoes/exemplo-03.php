<?php

	
	function ola($nome = "Mundo", $periodo = "Bom dia!"){
		return "Ola $nome, $periodo <br>";
	}

	echo ola("","Boa Noite");
	echo ola("Felipe", "Boa Tarde");
	echo ola();
	echo ola("Felipe", "Boa Noite");


?>