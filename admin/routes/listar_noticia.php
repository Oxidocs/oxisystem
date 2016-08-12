<?php
	
	require_once('../controllers/all_controllers.php');

	$controller = new Controllers();
	print_r($controller->getContent(4));
	
?>