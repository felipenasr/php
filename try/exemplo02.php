<?php 
	ini_set("display_errors", 1);

	function trataNome($nome){


		if (!$nome) {
			throw new Exception("Nenhum nome foi informado", 1);
		}

		echo ucfirst($nome)."<br>";

	}

	try{

		trataNome("");
		trataNome("Joao");

	}catch(Exception $e){

		echo $e->getMessage();

	}finally{
		echo "<br>Rodou o try!";
	}
?>