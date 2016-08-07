<?php

require_once('conection/conection.php');
require_once("crud.php");

/**
* 
*/
class Contenido {

	private $secciones_id;
	private $estados_id;
	private $titulo;
	private $descripcion;
	private $mensaje;
	private $imagenes = array();
	private $redes_sociales = array();
	private $links = array();

	public function __construct($secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $links) {
		$this->id = $id;
		$this->secciones_id = $secciones_id;
		$this->estados_id = $estados_id;
		$this->titulo = $titulo;
		$this->descripcion = $descripcion;
		$this->imagenes = $imagenes;
		$this->redes_sociales = $redes_sociales;
		$this->links = $links;
	}
	
	public static function getContent($id_seccion) {

		$model = new Crud();
		$model->select = "`contenido`.`SECCIONES_ID`,
						`contenido`.`ESTADOS_ID`,
						`contenido`.`TITULO`,
						`contenido`.`DESCRIPCION`";
		$model->from = "`contenido`";
		$model->Read();
		$response = $model->rows;
		$mensaje = $model->mensaje;

		return $response;
		// return new Contenido($response[]);
	}

	public function setContent($id, $secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $link) {

		$this->id = $id;
		$this->secciones_id = $secciones_id;
		$this->estados_id = $estados_id;
		$this->titulo = $titulo;
		$this->descripcion = $descripcion;
		$this->imagenes = $imagenes;
		$this->redes_sociales = $redes_sociales;
		$this->links = $links;
		
	}
}
	$Quienes = Contenido::getContent(1);
	print_r($Quienes);

?>