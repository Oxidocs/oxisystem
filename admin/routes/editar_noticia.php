<?php
	require_once('../controllers/all_controllers.php');

	$controller = new Controllers();

	extract($_POST);
	echo json_encode($controller->updateContent($id_, 4, 1, $titulo, $bajada, $descr, $portada, '', $galeria, '', ''));

?>