<?php
	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$grey = imagecolorallocate($image, 100, 100, 100);

	imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
	imagestring($image, 5, 450, 350, "Felipe Ricci", $grey);
	imagestring($image, 3, 450, 370, "Concluido em: ".date("d/m/Y"), $titleColor);

	header("Content-Type: image/jpeg");

	imagejpeg($image, "certificado".date("d-m-Y").".jpg", 10);

	imagedestroy($image);

?>