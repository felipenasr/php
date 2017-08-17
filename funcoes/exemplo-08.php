<?php 

	function soma(float ...$valores):float{
		return array_sum($valores);
	}

	var_dump(soma(2,3,2,3,6,3,5,52,5));
	echo '<br>';
	echo soma(2,3,25);
	echo '<br>';
	echo soma(1.5,3.1);

?>