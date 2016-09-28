<?php
include('../controllers/all_controllers.php');
	$controller = new Controllers();
	echo json_encode(($controller->getContentNoticia('', 11, '', '', '', 'fecha_creacion','',false, false, false, '1')));
?>