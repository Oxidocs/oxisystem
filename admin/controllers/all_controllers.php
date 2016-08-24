<?php
	include ("../models/contenido.php");
	
	date_default_timezone_set("America/Santiago");

	class Controllers {

		public function getContent($id_section) {


			$content_list = Contenido::getContent($id_section);

			return $content_list;
		}
		public function createContent($id, $secciones_id, $estados_id, $titulo, $bajada, $descripcion, $portada, $imagenes , $redes_sociales, $link){

			$fecha_actual = date('Y-m-d H:i:s');

			if ($id == '') {
				$mensaje_insert = Contenido::createContent($secciones_id, $estados_id, $titulo, $bajada, $descripcion, $portada, $fecha_actual, $imagenes, $redes_sociales, $link);
				if ($mensaje_insert['idfk'] > 0) {

					$id = $mensaje_insert['idfk'];
					$this->createFolder($id,$portada);

					return $mensaje_insert['mensaje'];

				}else{
					return $mensaje_insert['idfk'];
				}
				

			}else{
				$mensaje_insert = Contenido::updateContent($id, $secciones_id, $estados_id, $titulo, $descripcion, $imagenes, $redes_sociales, $link);

				return $mensaje_insert;
			}
		}

		private function createFolder($id, $portada){

			if (!file_exists("../../img/galeria/noticias/".$id)) {
				mkdir("../../img/galeria/noticias/".$id, 0777);
			}

			if (copy("../../img/galeria/tmp/".$portada, "../../img/galeria/noticias/".$id."/".$portada)) {
			    unlink("../../img/galeria/tmp/".$portada);
			}
		}
	}
?>