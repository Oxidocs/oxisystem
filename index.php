<?php 
require_once 'admin/controllers/contenido_slider.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ULS | Escuela de Periodismo</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!--    estilos-->
	<link rel="stylesheet" href="css/estilos.css">

	<!-- Custom CSS -->
	<link href="css/modern-business.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
				<div class="col-lg-4">
					<img src="img/logo.jpg" class="img-responsive" alt="escuela_periodismo">
				</div>
				<div class="col-lg-8">
					<img src="img/ULS.png" class="img-responsive pull-right" alt="uls">
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
						<a href="#">Home</a>
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
								<a href="#">Perfil</a>
							</li>
							<li>
								<a href="#">Admisión</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Cuerpo Docente</a>
					</li>
					<li>
						<a href="#">Noticias</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Publicaciones <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Artículos de Acádemicos</a>
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

	<!-- Header Carousel -->
	<header id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php 
		    if(!$objs == null)
		    {
			    $i=0; 
			    foreach ($objs as $obj) 
			    {
		   ?>
			<li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="<?php if($i==0){echo "active";}$i++;?>"></li>
			<?php
					}
				}
			 ?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		    <?php 
		    if(!$objs == null){
			    $i=0; 
			    foreach ($objs as $obj) 
			    {
		    ?>
				<div class="item <?php if($i==0){echo "active";}$i++;?>">	

					<div class="fill" style="background-image:url('<?php 
						if ($obj->PATH=="default.png")
						{
							echo "img/".$obj->PATH;
						}
						else
						{
							echo "img/slider-img/".$obj->PATH;
						}?>');
					">		
					</div>
					<div class="carousel-caption">
						<h2><?php echo $obj->DESCRIPCION;?></h2>
					</div>

				</div>
			<?php 
				}
			}
			else
			{?>
				<div class="item active">
					<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Imagen Uno');">					
					</div>
					<div class="carousel-caption">
						<h2>Descripción</h2>
					</div>
				</div>

			<?php
			}
			?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</header>

	<!-- contenidos -->
	<section id="contenidos" class="fondo">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 aside">
					<h4 class="text-left">Calendario Acádemico <i class="fa fa-angle-right"></i></h4>
					<hr>
					
				</div>
				<div id="hilonoticias" class="col-lg-6">
					<h4 id="tituloseccion">NOTICIAS</h4>
					<!-- First Blog Post -->
					<a href="#">
						<img class="img-responsive img-hover" src="http://placehold.it/900x400&text=Imagen Noticias 1" alt="">
					</a>
					<h2>
						<a href="#">Titulo Noticia</a>
					</h2>
					<p><i class="fa fa-clock-o"></i> Publicado el 5 de Agosto, 2016</p>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
					<a class="leermas btn btn-primary pull-right" href="#">Leer más <i class="fa fa-angle-right"></i></a>


					<!-- Second Blog Post -->
					<a href="#">
						<img class="img-responsive img-hover" src="http://placehold.it/900x400&text=Imagen Noticias 2" alt="">
					</a>
					<h2>
						<a href="#">Titulo Noticia</a>
					</h2>
					<p><i class="fa fa-clock-o"></i> Publicado el 5 de Agosto, 2016</p>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
					<a class="leermas btn btn-primary pull-right" href="#">Leer más <i class="fa fa-angle-right"></i></a>



					<!-- Third Blog Post -->
					<a href="#">
						<img class="img-responsive img-hover" src="http://placehold.it/900x400&text=Imagen Noticias 3" alt="">
					</a>
					<h2>
						<a href="#">Titulo Noticia</a>
					</h2>
					<p><i class="fa fa-clock-o"></i> Publicado el 5 de Agosto, 2016</p>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
					<a class="leermas btn btn-primary pull-right" href="#">Leer más <i class="fa fa-angle-right"></i></a>

				</div>
				<!-- calendario-->
				<div class="col-lg-3 aside">
					<h4 class="text-left">Redes Sociales <i class="fa fa-angle-right"></i></h4>
					<hr>
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