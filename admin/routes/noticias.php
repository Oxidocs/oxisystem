<?php
	
	require_once('../controllers/all_controllers.php');

	extract($_POST);
	$controller = new Controllers();
	if(!isset($galeria)){
		$galeria = '';
	}
	echo json_encode($controller->createContent('', 4, $estado, $titulo , $bajada, $descr, $portada , $galeria , '', '','noticias', 'tmp'));
	
?>