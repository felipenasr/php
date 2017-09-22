<?php 
	if(isset($_COOKIE['nome_do_cookie'])){
		var_dump(json_decode($_COOKIE['nome_do_cookie']));
	}

?>