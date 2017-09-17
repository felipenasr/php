<?php
	interface Veiculo{

		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);

	}

	abstract class Automovel implements Veiculo{
		
		public function acelerar($velocidade){
			echo "o Veiculo acelerou ".$velocidade;
		}
		public function freiar($velocidade){
			echo "o Veiculo freiou ".$velocidade;
		}
		public function trocarMarcha($marcha){
			echo "o Veiculo trocou para a marcha ".$marcha;
		}
	
	}


	class DelRey extends Automovel{
		public function empurrar(){

		}
	}

	$carro = new DelRey();

	$carro->acelerar(200);

?>