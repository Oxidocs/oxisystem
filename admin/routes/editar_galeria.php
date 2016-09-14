<?php
	require_once('../controllers/all_controllers.php');

	$controller = new Controllers();

	extract($_POST);
	echo json_encode($controller->updateContent($id_, 5, $estado, $titulo, '', $titulo, $portada, '', $galeria, '', ''));

?>