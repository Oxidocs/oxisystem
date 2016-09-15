<?php

    $id = 5;
    $domain = $_SERVER['HTTP_HOST'];
    $normativas = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/single_vision.php?id='.$id);
    $normativas = json_decode($normativas);

?>
<!-- Aqui comienza la sección normativa de descargas de documentos -->
  <section class="normativas">
    	<div class="container">
				<div class="row marquesina2">
					<h2>Normativas</h2>
				</div>
    		<div class="row paneles">
					<div class="col-md-6">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h4><i class="pdficon fa fa-file-pdf-o"></i> Decreto Exento N° 028 / 2010 - 19 enero de 2010</h4>
							</div>
							<div class="panel-body">
	                <!-- la idea es que la descripción de la descarga no sobrepase esta cantidad de caracteres -->
								<p>Aprueba Reglamento de Régimen de Estudio de la Universidad de La Serena y deroga Decreto de Rectoría Exento Nº 04/2005, de fecha 05 de enero de 2005.</p>
								<a href="#" class="descargabtn btn btn-success pull-right">Descargar</a>
							</div>
						</div>
          </div>
          
        </div>
    	</div>
  </section>