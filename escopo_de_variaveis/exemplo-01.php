<?php 
	$nome = "Felipe";
	function teste(){
		global $nome;
		echo $nome.'</br>';
	}
	function teste2(){
		global $nome;
		echo $nome.' teste2';
	}
	teste();
	teste2();
?>