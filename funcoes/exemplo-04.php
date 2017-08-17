<?php
	
	function ola(){
		$argumentos = func_get_args();
		return $argumentos;
	}

	var_dump(ola("oi", 5,2,3,65,3.3));


?>