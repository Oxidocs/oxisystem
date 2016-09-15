<?php 
include("conection/conection.php");
include("crud.php");

function guardar($name, $startdate, $enddate, $starttime, $endtime, $color, $url){

	$model = new Crud();
	$model->insertInto = 'calendario';
	$model->insertColumns = "name, startdate, enddate, starttime, endtime, color, url";
	$model->insertValues = "'$name', '$startdate','$enddate', '$starttime', '$endtime','$color','$url'";
	$model->Create();
	return $model->mensaje;

}

?>