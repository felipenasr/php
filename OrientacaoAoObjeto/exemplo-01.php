<?php
	class Pessoa{
		public $nome; //atributo 

		public function falar(){//metodo
			return "O meu nome é ".$this->nome;	
		}
	}


	$felipe = new Pessoa();

	$felipe->nome = "Felipe";

	echo $felipe->falar();
?>