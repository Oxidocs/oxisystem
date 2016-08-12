<?php
	
	require_once('../controllers/all_controllers.php');

	extract($_POST);
	$controller = new Controllers();
	echo $controller->createContent('', 4, 1, $nombre , $descr, $imagen , '' , '');
	
?>