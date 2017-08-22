<?php
	interface Veiculo{

		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);

	}

	class Civic implements Veiculo{
		
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
	

	$carro = new Civic();
	$carro->trocarMarcha(2);
?>