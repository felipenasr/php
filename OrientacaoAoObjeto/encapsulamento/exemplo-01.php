<?php
	class Pessoa{
		public $nome = "Felipe";
		protected $idade = 22;
		private $senha = "123456";


		public function verDados(){
			echo $this->nome."<br>";
			echo $this->idade."<br>"; 
			echo $this->senha."<br>"; 
		}
	}

	$a = new Pessoa();
	
	$a->verDados();
?>