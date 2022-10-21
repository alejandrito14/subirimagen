<?php 

	$ruta='archivos/';
if (($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "image/gif")) {


	move_uploaded_file($_FILES["file"]["tmp_name"], $ruta.$_FILES['file']['name']);

	echo $ruta.$_FILES['file']['name'];
	
}else{

	echo 0;
}


 ?>