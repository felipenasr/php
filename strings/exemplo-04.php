<?php 
	$frase = "A repetição é mãe da retenção";

	$palavra = "mãe";
	$q = strpos($frase, $palavra);

	$texto = substr($frase, 0 , $q);
	$texto2 = substr($frase, $q+ strlen($palavra), strlen($frase));

	echo $texto2;

?>