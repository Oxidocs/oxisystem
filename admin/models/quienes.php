<?php

require_once("crud.php");

/**
* 
*/
public class Contenido {

	private $id;
	private $secciones_id;
	private $estados_id;
	private $titulo;
	private $descripcion;
	private $mensaje;
	private $imagenes = array();
	private $redes_sociales = array();
	private $links = array();

	public function __construct($id, $secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $links) {
		$this->id = $id;
		$this->secciones_id = $secciones_id;
		$this->estados_id = $estados_id;
		$this->titulo = $titulo;
		$this->descripcion = $descripcion;
		$this->imagenes = $imagenes;
		$this->redes_sociales = $redes_sociales;
		$this->links = $links;
	}
	
	public function getContent($id_seccion) {

		$model = new Crud();
		$model->select = "";
		$model->from = "";
		$model->condition = "";
		$model->Read();
		$response = $model->rows;
		$mensaje = $model->mensaje;

		return new Contenido($id, $secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $link);
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

?>