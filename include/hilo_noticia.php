<?php
$domain = $_SERVER['HTTP_HOST'];
$json = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/hilo_noticia.php');
$objs = json_decode($json);
 ?>
<div class="hilonoticias">
						<h4 class="col-lg-3 col-md-3 col-xs-12">NOTICIAS</h4>
						<!-- First Blog Post -->

							<img class="img-responsive" src="http://placehold.it/900x400&text=Imagen Noticias 1" alt="">

						<h2>
							<a href="single-noticias.html">Investigación de Académicas de Periodismo es Publicado por Sitio SciELO</a>
						</h2>
						<p class="fecha"><i class="fa fa-clock-o"></i> Publicado el 5 de Agosto, 2016</p>
						<hr>
						<p>Hace unos meses, las académicas de la carrera Mg. Carolina Rodríguez Malebrán y Mg. Marcela Altamirano, se encontraron con la gratificante noticia que su investigación de casi dos años fue publicada por la revista Actualidades Investigativas en Educación de la Universidad de Costa Rica y que fue indexada al prestigioso sitio Scientific Electronic Library Online (SciElo).</p>
						<a id="leermas" class="btn btn-primary pull-right" href="#">Leer más <i class="fa fa-angle-right"></i></a>


						<!-- Second Blog Post -->

							<img class="img-responsive" src="http://placehold.it/900x400&text=Imagen Noticias 2" alt="">

						<h2>
							<a href="single-noticias.html">Jefe de Carrera Asiste a Encuentro Nacional de Directores de Escuelas de Periodismo</a>
						</h2>
						<p class="fecha"><i class="fa fa-clock-o"></i> Publicado el 5 de Agosto, 2016</p>
						<hr>
						<p>Con el objetivo de discutir y apoyar la organización del XVI Encuentro de la Federación Latinoamericana de Facultades de Comunicación Social (FELAFACS), es que durante la semana pasada el Director de carrera, Cristian Muñoz Catalán, visitó la Escuela de Periodismo de la Pontificia Universidad Católica de Valparaíso...</p>
						<a id="leermas" class="btn btn-primary pull-right" href="#">Leer más <i class="fa fa-angle-right"></i></a>



						<!-- Third Blog Post -->

							<img class="img-responsive img-hover" src="http://placehold.it/900x400&text=Imagen Noticias 3" alt="">

						<h2>
							<a href="single-noticias.html">Generación 2016 Participa en Debates Sobre Temas de Interés Nacional</a>
						</h2>
						<p class="fecha"><i class="fa fa-clock-o"></i> Publicado el 5 de Agosto, 2016</p>
						<hr>
						<p>Los alumnos de primer año de la cátedra de Historia y Geografía, que imparte la profesora Marcela Altamirano, visitaron la muestra Fragmentos del Museo de la Memoria y los Derechos Humanos, que se encuentra en exhibición en la ex iglesia.</p>
						<a id="leermas" class="btn btn-primary pull-right" href="#">Leer más <i class="fa fa-angle-right"></i></a>
					<div class="clearfix"></div>
					</div>