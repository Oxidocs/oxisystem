<?php

require_once('conection/conection.php');
require_once("crud.php");

/**
* 
*/
class Contenido {

	public $id;
	public $secciones_id;
	public $estados_id;
	public $titulo;
	public $descripcion;
	public $mensaje;
	public $imagenes = array();
	public $redes_sociales = array();
	public $links = array();

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
	
	public static function getContent($id_seccion) {

		$content_list = array();

		if ($id_seccion > 0) {
			
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
			
			foreach ($response as $content) {

				$id = $content['ID']; //id obtenido de contenido para realizar las demás consultas

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

				$contenido = new Contenido($id, $content['SECCIONES_ID'],$content['ESTADOS_ID'],$content['TITULO'],$content['DESCRIPCION'],$imgs,$social_media, $enlaces);

				array_push($content_list, $contenido);
			}
		}

		

		return $content_list;
	}

	public static function createContent($secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $link) {

		$model = new Crud();
		$model->insertInto = "contenido";
		$model->insertColumns = "SECCIONES_ID, ESTADOS_ID, TITULO, DESCRIPCION";
		$model->insertValues = "$secciones_id, $estados_id, '$titulo', '$descripcion'";
		$model->Create();
		$mensaje = $model->mensaje;
		return $mensaje;
	}

	public static function updateContent($id, $secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $link){

		$model = new Crud();
		$model->update = "contenido";
		$model->set = "SECCIONES_ID = $secciones_id, ESTADOS_ID = $estados_id, TITULO = '$titulo', DESCRIPCION = '$descripcion'";
		$model->condition = "ID = $id";
		$model->Update();
		$mensaje = $model->mensaje;
		return $mensaje;

	}
}

?>