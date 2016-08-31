<?php
	require_once('../controllers/all_controllers.php');

	$controller = new Controllers();

	extract($_POST);
	print_r($controller->updateContent($id_, 4, 1, $titulo, $bajada, $descr, $portada, '', $galeria, '', ''));
	// $id, $secciones_id, $estados_id, $titulo, $bajada, $descripcion, $portada, $fecha_creacion, $imagenes, $redes_sociales, $link

?>