<?php
	
	require_once('../controllers/all_controllers.php');

	$controller = new Controllers();
	$objs = $controller->getContent(4);
	$result = array(); 	
	foreach ($objs as $obj) {
		$tmp = array();		
		$tmp = array(			
				"$obj->titulo",
				"$obj->subtitulo",
				"$obj->portada_contenido"
			    );
		array_push($result, $tmp);
	}
	echo "{ \"data\":".json_encode($result)."}";
?>