<?php
	$domain = $_SERVER['HTTP_HOST'];
	$json = file_get_contents('http://'.$domain.'/oxisystem/admin/controllers/slider.php?action=listar');
	$objs = json_decode($json);
?>
