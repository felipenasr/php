<?php

	$link = "https://jovemnerd.com.br/wp-content/uploads/2017/03/it-a-coisa-comparacao-de-trailer.png";

	$content = file_get_contents($link);


	$parse = parse_url($link);
	
	$basename = basename($parse["path"]);

	$file = fopen($basename, "w+");
	fwrite($file, $content);
	fclose($file);
?>


<img src="<?=$basename?>" alt="">