<?php

if (isset($_GET['dir'])) {
	uploadImages($_GET['dir']);
}

function uploadImages($url){

	$ds = DIRECTORY_SEPARATOR; 
	 
	if (!empty($_FILES)) {

		if(isset($_GET["delete"]) && $_GET["delete"] == true) {
			$name = $_POST["filename"];
			if(file_exists($url.$name)) {
				unlink($url.$name);
				echo json_encode(array("res" => true));
			}else{
				echo json_encode(array("res" => true));
			}
		} else {
			$tempFile = $_FILES['file']['tmp_name'];
		    $targetPath = dirname( __FILE__ ) . $ds. $url . $ds; 
		    $targetFile =  $targetPath. $_FILES['file']['name']; 
		    move_uploaded_file($tempFile,$targetFile);
		}
	 
	} else {

		if(isset($_GET["delete"]) && $_GET["delete"] == true) {
			$name = $_POST["filename"];
			if(file_exists($url.$name)) {
				unlink($url.$name);
				echo json_encode(array("res" => true));
			}else{
				echo json_encode(array("res" => true));
			}
		}else{

			$result  = array();
	 
		    $files = scandir($url);
		    if ( false!==$files ) {
		        foreach ( $files as $file ) {
		            if ( '.'!=$file && '..'!=$file) {
		            	$obj['name'] = $file;
		                $obj['size'] = filesize($url.$ds.$file);
		                $result[] = $obj;
		            }
		        }
		    }
		     
		    header('Content-type: text/json');
		    header('Content-type: application/json');
		    echo json_encode($result);
		}
	}
}


?>