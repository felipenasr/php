<?php 
	$condicao = true;


	while($condicao){
		$numero = rand(1,10);
		if ($numero == 3) {
			$condicao = false;
			echo "<br><br><b>Numero 3 !!!!!</b>";
		}else{
			echo $numero."<br>";
		}
	}

?>