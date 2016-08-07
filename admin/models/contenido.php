<?php

require_once('conection/conection.php');
require_once("crud.php");

/**
* 
*/
class Contenido {

	public $secciones_id;
	public $estados_id;
	public $titulo;
	public $descripcion;
	public $mensaje;
	public $imagenes = array();
	public $redes_sociales = array();
	public $links = array();

	public function __construct($secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $links) {
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
		$model->select = "`contenido`.`ID`,
						`contenido`.`SECCIONES_ID`,
						`contenido`.`ESTADOS_ID`,
						`contenido`.`TITULO`,
						`contenido`.`DESCRIPCION`";
		$model->from = "`contenido`";
		$model->condition = "`contenido`.`SECCIONES_ID` = $id_seccion AND `contenido`.`ESTADOS_ID` = 1";
		$model->Read();
		$response = $model->rows;
		$content = $response[0];

		$id = $content['ID'];

		$model = new Crud();
		$model->select = "`path_imagenes`.`ID`,
						`path_imagenes`.`ESTADOS_ID`,
						`path_imagenes`.`PATH`,
						`path_imagenes`.`TITULO`,
						`path_imagenes`.`DESCRIPCION`";
		$model->from = "`contenido`
						INNER JOIN `contenido_path` ON `contenido`.`ID` = `contenido_path`.`CON_ID`
						INNER JOIN `path_imagenes` ON `contenido_path`.`PAT_ID` = `path_imagenes`.`ID`";
		$model->condition = "`contenido`.`ID` = $id AND `path_imagenes`.`ESTADOS_ID` = 1";
		$model->Read();
		$imgs = $model->rows;

		$model = new Crud();
		$model->select = "`redes_sociales`.`ID`,
						`redes_sociales`.`TIPO_REDES_ID`,
						`redes_sociales`.`ESTADOS_ID`,
						`redes_sociales`.`CON_ID`,
						`redes_sociales`.`LINK`";
		$model->from = "`redes_sociales`";
		$model->condition = "`redes_sociales`.`CON_ID` = $id AND `redes_sociales`.`ESTADOS_ID` = 1";
		$model->Read();
		$social_media = $model->rows;

		$model = new Crud();
		$model->select = "`links`.`ID`,
						`links`.`CONTENIDOS_ID`,
						`links`.`ESTADOS_ID`,
						`links`.`URL`";
		$model->from = "`links`";
		$model->condition = "`links`.`CONTENIDOS_ID` = $id AND `links`.`ESTADOS_ID` = 1";
		$model->Read();
		$enlaces = $model->rows;


		return new Contenido($content['SECCIONES_ID'],$content['ESTADOS_ID'],$content['TITULO'],$content['DESCRIPCION'],$imgs,$social_media, $enlaces);
	}

	public function setContent($secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $link) {

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