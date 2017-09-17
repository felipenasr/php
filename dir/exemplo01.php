<?php 
	$name = "images";


	if (!is_dir($name)) {
		mkdir("images");
		echo "Repositorio criado";
	}else{
		rmdir("images");
		echo "Diretorio ja existe";
	}


?>