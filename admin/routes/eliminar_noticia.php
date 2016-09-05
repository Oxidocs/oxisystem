<?php
	require_once('../controllers/all_controllers.php');
	$controller = new Controllers();
	$objs = $controller->deleteContent('', 4, '', '', '', '','');
	print_r($objs);
?>