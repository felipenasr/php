<?php
	class Endereco{

		private $logradouro;
		private $numero;
		private $cidade;



		public function __construct($a, $b, $c){

			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}
		public function __destruct(){
			//	var_dump("destroi");
		}

		public function __toString(){
			return $this->logradouro.', '.$this->numero." - ".$this->cidade.'.';
		}
	}

	$casa = new Endereco("Avenida Dom Pedro I", "540", "Osasco");


	echo $casa;
?>