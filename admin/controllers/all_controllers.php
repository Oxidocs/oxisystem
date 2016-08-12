<?php
	include ("../models/contenido.php");
	
	date_default_timezone_set("America/Santiago");

	class Controllers {

		public function getContent($id_section) {


			$content_list = Contenido::getContent($id_section);

			return $content_list;
		}

		public function createContent($id, $secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $link){

			$fecha_actual = date('Y-m-d H:i:s');

			if ($id == '') {

				$mensaje_insert = Contenido::createContent($secciones_id, $estados_id, $titulo, $descripcion, $fecha_actual, $imagenes, $redes_sociales, $link);

				return $mensaje_insert;

			}else{
				$mensaje_insert = Contenido::updateContent($id, $secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $link);

				return $mensaje_insert;
			}
		}
	}
?>