<?php 

	$nome1 = "Felipe";

	$sobrenome = "Ricci";

	$nomeCompleto = $nome1." ".$sobrenome;
	echo $nomeCompleto;

	echo "<br />";

	unset($nome1);
	//isset verifica se existe dados na variavel 
	if (isset($nome1)){
		echo $nome1;
	}


?>