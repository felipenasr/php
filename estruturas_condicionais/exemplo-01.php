<?php

	$suaIdade = 69;


	$idadeCrianca = 12;
	$idadeAdulto = 18;
	$idadeIdoso = 65;

	if($suaIdade < $idadeCrianca){
		echo "Criança";
	}elseif($suaIdade < $idadeAdulto){
		echo "Adolescente";
	}elseif($suaIdade < $idadeIdoso){
		echo "Você é adulto";
	}else{
		echo "Você é idoso";
	}

?>