<?php 

	function soma(int ...$valores){
		return array_sum($valores);
	}

	echo soma(2,3,2,3,6,3,5,52,5);
	echo '<br>';
	echo soma(2,3,25);
	echo '<br>';
	echo soma(1.5+3.1);

?>