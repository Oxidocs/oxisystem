<?php
	
	require_once('../controllers/all_controllers.php');

	if(count($_POST)>0){

		echo 'post';

	}else{

		$controller = new Controllers();
		print_r($controller->getContent(1));

	}
?>