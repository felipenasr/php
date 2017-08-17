<?php
	
	$json = '[{"nome":"felipe","idade":22},{"nome":"marcus","idade":25}]';

	$data = json_decode($json);
	echo "exe 1 <br>".$data.'<br>';
	var_dump($data);
?>