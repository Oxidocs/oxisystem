<?php

if (isset($_POST['dir'])) {
	getFilesName($_POST['dir']);
}

function getFilesName($url){
	$files_array = array();
    $files = scandir($url);
    foreach ($files as $file) {
    	if ($file!="."&&$file!="..") {
    		array_push($files_array, "<option value='$file'>".$file."</option>");
    	}
    }
    echo json_encode($files_array);
}

?>