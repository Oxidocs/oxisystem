<?php
	
	require_once('../controllers/all_controllers.php');

	$controller = new Controllers();

	extract($_GET);
	print_r($controller->getContent($id, 4, '', ''));
	
?>