<?php 

$data = array(
	"nome"=>"Felipe"
);

setcookie("nome_do_cookie", json_encode($data), time()+3600);


?>