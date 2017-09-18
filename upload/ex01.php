<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">

	<button type="submit">send</button>
</form>

<?php 
	
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		$file = $_FILES["fileUpload"];

		if ($file["error"]) {
			echo "Error";
		}

		$dirUploads = "uploads";



		if(!is_dir($dirUploads)){
			mkdir($dirUploads);
		}


		if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
			echo "Sucesso";
		}else{
			echo "Error";
		}


	}

?>