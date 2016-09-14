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

	<link rel="stylesheet" href="css/lightbox.min.css">

	<!-- fuentes -->

	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
	<?php
	include 'include/header.php';
	include 'include/nav.php';
	include 'include/slider-home.php';
	?>

	<!-- contenidos -->
	<section class="fondocontenidos">
		<div class="container">
			<div class="row">
				<div class="col-md-3 aside">
					<div>
						<h4><i class="fa fa-calendar" aria-hidden="true"></i> Calendario Académico</h4>
					</div>
				</div>
				<div class="col-md-6">
					<?php
						include 'include/hilo_noticia.php'
					?>
			</div>
				<!-- twitter-->
				<div class="col-md-3 aside">
					<div>
						<h4><i id="icono" class="fa fa-share-square-o"></i> Redes Sociales</h4>
						<hr>
						<div class="fb-page" data-href="https://www.facebook.com/periodismo.uls/" data-tabs="timeline" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/periodismo.uls/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/periodismo.uls/">Periodismo Uls</a></blockquote></div>
						<a class="twitter-timeline" data-height="400" href="https://twitter.com/userena">Tweets by userena</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Galerías -->
	<section class="galerias">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2><i class="fa fa-camera" aria-hidden="true"></i> Galerías Fotográficas</h2>
				</div>
				<div class="col-md-4 col-sm-6">
					<a  href="http://placehold.it/700x450&text=Galería 1" data-lightbox="logo" data-title="My caption">
						<img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 1" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 2" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 3" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 4" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 5" alt="">
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="#">
						<img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Galería 6" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>

<?php include 'include/footer.php'; ?>

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	<!-- Script to Activate the Carousel -->
	<script>
		$('#myCarousel').carousel({
			interval: 4000 //changes the speed
		})
	</script>

	<script src="js/lightbox.min.js"></script>
	<script type="text/javascript">
		$(window).resize(function(){$('.fb-comments iframe,.fb-comments span:first-child').css({'width':$('#commentboxcontainer').width()});});
	</script>

</body>

</html>
