<?php 
	$images = scandir("images");
	$data = array();
	foreach ($images as $img) {
		if (!in_array($img, array('.', '..'))) {
			$filename =	"images" . DIRECTORY_SEPARATOR . $img;
			$info = pathinfo($filename);

			$info["size"] = filesize($filename);
			$info["modify"] = date("d/m/Y H:i:s", filemtime($filename));
			$info["url"] = "//localhost/projetosPessoais/php/dir".str_replace("\\", "/", $filename);
			array_push($data, $info);
		}
	}	
	echo json_encode($data);
?>