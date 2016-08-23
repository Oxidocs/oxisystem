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
				"<img  src='../../img/$obj->portada_contenido' class='avatar avatar-portada0 center-block' alt='Avatar'>",
				"<a href='#'>Editar $obj->id</a>"

			    );
		array_push($result, $tmp);
	}
	echo "{ \"data\":".json_encode($result)."}";
?>