<?php 
	 ini_set("display_errors", 1);
	try{
		throw new Exception("Houve um erro", 400);

	}catch(Exception $e){
		echo json_encode(array(
			"mensagem"=>$e->getMessage(),
			"linha"=>$e->getLine(),
			"arquivo"=>$e->getFile(),
			"code"=>$e->getCode()
		));


	}

?>