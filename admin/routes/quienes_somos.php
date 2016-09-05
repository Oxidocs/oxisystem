<?php
	
	require_once('../controllers/all_controllers.php');

	extract($_POST);
	$controller = new Controllers();
	if (isset($id)) {
		echo $controller->createContent($id, $section_id, 1, '', '', $data, '', '', '', '');
	}else{
		echo json_encode([$controller->getContent('', 2, '', '', '', '','',false, false, false),$controller->getContent('', 3, '', '', '', '','',false, false, false))]);
	}
?>