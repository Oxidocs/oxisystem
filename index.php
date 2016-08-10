<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ULS | Escuela de Periodismo</title>


	<link href="css/bootstrap.min.css" rel="stylesheet">


	<link rel="stylesheet" href="css/estilos.css">


	<link href="css/modern-business.css" rel="stylesheet">


	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

	<!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->

	<link rel="apple-touch-icon" href="favicon.png">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!--	cabecera con logos-->
	<section id="logos">
		<div class="container">
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
					<img src="img/logo.jpg" class="img-responsive" alt="escuela_periodismo">
				</div>
				<div class="hidden-xs hidden-sm col-md-4 col-lg-8">
					<img src="img/ULS.png" class="img-responsive pull-right" alt="uls">
				</div>
			</div>
		</div>
	</section>
	<!--	cabecera con logos para movil-->
  	<section class="logosmovil">
  		<div class="container">
  			<div class="row">
  				<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
  					<img src="img/ULS.png" class="img-responsive center-block" alt="escuela_periodismo">
  				</div>
  				<div class="logoperiodismo col-xs-12 col-sm-12 hidden-md hidden-lg">
  					<img src="img/logo.jpg" class="img-responsive pull-right" alt="uls">
  				</div>
  			</div>
  		</div>
  	</section>
	<!-- Navegacion -->
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--                <a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<a href="index.html">Home</a>
					</li>
					<li class="dropdown">
						<a href="escuela.html" class="dropdown-toggle" data-toggle="dropdown">Escuela <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="escuela.html">Misión</a>
							</li>
							<li>
								<a href="escuela.html">Visión</a>
							</li>
							<li>
								<a href="escuela.html">Normativas</a>
							</li>
							<li>
								<a href="escuela.html">Pautas de investigación y exámenes</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Carrera <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="perfil.html">Perfil</a>
							</li>
							<li>
								<a href="#">Admisión</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="docentes.html">Cuerpo Docente</a>
					</li>
					<li>
						<a href="#">Noticias</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Publicaciones <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Artículos de Académicos</a>
							</li>
							<li>
								<a href="#">Seminarios de Investigación</a>
							</li>
						</ul>
					</li>

				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- silder -->
	<?php
	include 'admin/controllers/contenido_slider.php';
	?>

	<!-- contenidos -->
	<section id="contenidos" class="fondo">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="aside">
							<h4 class="text-left">Calendario Académico <i class="fa fa-angle-right"></i></h4>
					</div>
				</div>
				<div class="col-md-6">
					<div id="hilonoticias">
						<h4 id="tituloseccion" class="col-lg-3 col-md-3 col-xs-12">NOTICIAS</h4>
						<!-- First Blog Post -->

							<img class="img-responsive" src="http://placehold.it/900x400&text=Imagen Noticias 1" alt="">

						<h2>
							<a href="#">Investigación de Académicas de Periodismo es Publicado por Sitio SciELO</a>
						</h2>
						<p><i class="fa fa-clock-o"></i> Publicado el 5 de Agosto, 2016</p>
						<hr>
						<p>Hace unos meses, las académicas de la carrera Mg. Carolina Rodríguez Malebrán y Mg. Marcela Altamirano, se encontraron con la gratificante noticia que su investigación de casi dos años fue publicada por la revista Actualidades Investigativas en Educación de la Universidad de Costa Rica y que fue indexada al prestigioso sitio Scientific Electronic Library Online (SciElo).</p>
						<a class="leermas btn btn-primary pull-right" href="#">Leer más <i class="fa fa-angle-right"></i></a>


						<!-- Second Blog Post -->

							<img class="img-responsive" src="http://placehold.it/900x400&text=Imagen Noticias 2" alt="">

						<h2>
							<a href="#">Jefe de Carrera Asiste a Encuentro Nacional de Directores de Escuelas de Periodismo</a>
						</h2>
						<p><i class="fa fa-clock-o"></i> Publicado el 5 de Agosto, 2016</p>
						<hr>
						<p>Con el objetivo de discutir y apoyar la organización del XVI Encuentro de la Federación Latinoamericana de Facultades de Comunicación Social (FELAFACS), es que durante la semana pasada el Director de carrera, Cristian Muñoz Catalán, visitó la Escuela de Periodismo de la Pontificia Universidad Católica de Valparaíso...</p>
						<a class="leermas btn btn-primary pull-right" href="#">Leer más <i class="fa fa-angle-right"></i></a>



						<!-- Third Blog Post -->

							<img class="img-responsive img-hover" src="http://placehold.it/900x400&text=Imagen Noticias 3" alt="">

						<h2>
							<a href="#">Generación 2016 Participa en Debates Sobre Temas de Interés Nacional</a>
						</h2>
						<p><i class="fa fa-clock-o"></i> Publicado el 5 de Agosto, 2016</p>
						<hr>
						<p>Los alumnos de primer año de la cátedra de Historia y Geografía, que imparte la profesora Marcela Altamirano, visitaron la muestra Fragmentos del Museo de la Memoria y los Derechos Humanos, que se encuentra en exhibición en la ex iglesia.</p>
						<a class="leermas btn btn-primary pull-right" href="#">Leer más <i class="fa fa-angle-right"></i></a>
					<div class="clearfix"></div>
					</div>
			</div>
				<!-- calendario-->
				<div class="col-md-3">
					<div class="aside">
						<h4 class="text-left">Redes Sociales <i class="fa fa-angle-right"></i></h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Galerías -->
	<section id="galerias">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Galerías Fotográficas</h2>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img id="galeriaimg" class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 1" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img id="galeriaimg" class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 2" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img id="galeriaimg" class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 3" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img id="galeriaimg" class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 4" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img id="galeriaimg" class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 5" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img id="galeriaimg" class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 6" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<footer>
		<div class="container">
			<div id="logosydatos" class="row">
				<div class="col-lg-6">
					<img src="img/logoweb.png" alt="" class="img-responsive pull-left">
				</div>
				<div id="datosfooter" class="col-lg-6 pull-right">

					<p>Escuela de Periodismo Universidad de La Serena</p>

					<p>Campus Andrés Bello, Avenida Raúl Bitrán Nachary S/N La Serena, Chile</p>

					<p>+56 (51) 2204352 eperiodismo@userena.cl
					</p>
				</div>
			</div>
		</div>
	</footer>


	<!-- /.container -->

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Script to Activate the Carousel -->
	<script>
		$('.carousel').carousel({
			interval: 5000 //changes the speed
		})
	</script>

</body>

</html>
