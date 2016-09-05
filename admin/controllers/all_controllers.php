<?php
	include ("../models/contenido.php");
	
	date_default_timezone_set("America/Santiago");

	class Controllers {

		public function getContent($id, $id_seccion, $limit_desde, $limit_hasta,$limit, $order_by, $desc, $img_bool, $link_bool, $social_bool) {

			if (is_numeric($id)) {
				$content_list = Contenido::getContent($id, $id_seccion, $limit_desde, $limit_hasta, $limit, $order_by, $desc, $img_bool, $link_bool, $social_bool);
				return $content_list;
			}else{
				header('Location: ../../index.php');
				exit;
			}
			
		}
		public function getContentNoticia($id, $id_seccion, $limit_desde, $limit_hasta,$limit, $order_by, $desc, $img_bool, $link_bool, $social_bool) {
				$content_list = Contenido::getContent($id, $id_seccion, $limit_desde, $limit_hasta, $limit, $order_by, $desc, $img_bool, $link_bool, $social_bool);
				return $content_list;
			
			
		}
		public function createContent($id, $secciones_id, $estados_id, $titulo, $bajada, $descripcion, $portada, $imagenes , $redes_sociales, $link){

			$fecha_actual = date('Y-m-d H:i:s');

			if ($id == '') {
				$mensaje = Contenido::createContent($secciones_id, $estados_id, $titulo, $bajada, $descripcion, $portada, $fecha_actual, $imagenes, $redes_sociales, $link);
				if ($mensaje['idfk'] > 0) {
					$id = $mensaje['idfk'];
					$this->createFolder($id,$portada,$imagenes);
					return $mensaje_insert['mensaje'];
				}else{
					return $mensaje['idfk'];
				}
				

			}else{
				$mensaje = Contenido::updateContent($id, $secciones_id, $estados_id, $titulo, $bajada, $descripcion, $portada, $fecha_creacion, $imagenes, $redes_sociales, $link);

				return $mensaje;
			}
		}

		public function updateContent($id, $secciones_id, $estados_id, $titulo, $bajada, $descripcion, $portada, $fecha_creacion, $imagenes, $redes_sociales, $link) {

				for ($i=0; $i < count($imagenes); $i++) { 
					if ($imagenes[$i]['estado'] == "true") {
						$imagenes[$i]['estado'] = 1;
					}else{
						$imagenes[$i]['estado'] = 0;
					}
				}

			$mensaje = Contenido::updateContent($id, $secciones_id, $estados_id, $titulo, $bajada, $descripcion, $portada, $fecha_creacion, $imagenes, $redes_sociales, $link);
			return $mensaje;
		}

		public function deleteContent($id) {
			$mensaje = Contenido::deleteContent($id);
			return $mensaje;			
		}

		private function createFolder($id, $portada, $imagenes){

			if (!file_exists("../../img/galeria/noticias/".$id)) {
				mkdir("../../img/galeria/noticias/".$id, 0777);
			}

			if (file_exists("../../img/galeria/tmp/".$portada)) {
				if (copy("../../img/galeria/tmp/".$portada, "../../img/galeria/noticias/".$id."/".$portada)) {
					unlink("../../img/galeria/tmp/".$portada);
				}
			}
			if ($imagenes!="") {
				foreach ($imagenes as $imagen) {
					if (copy("../../img/galeria/tmp/".$imagen['path'], "../../img/galeria/noticias/".$id."/".$imagen['path'])) {
						unlink("../../img/galeria/tmp/".$imagen['path']);
					}
				}
			}
		}

	}
?>