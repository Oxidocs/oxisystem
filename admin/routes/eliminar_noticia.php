<?php
	require_once('../controllers/all_controllers.php');
	extract($_POST);
	$controller = new Controllers();
	$objs = $controller->deleteContent($id, 4, '', '', '', '','');
	print_r($objs);
?>