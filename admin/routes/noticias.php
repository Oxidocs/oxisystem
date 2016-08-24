<?php
	
	require_once('../controllers/all_controllers.php');

	extract($_POST);
	print_r($_POST);
	$controller = new Controllers();
	if(!isset($galeria)){
		$galeria = '';
	}
	print_r($controller->createContent('', 4, 1, $titulo , $bajada, $descr, $portada , $galeria , '', ''));
	
?>