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
	?>
  <section class="descargas">
    <div class="container">
      <div class="row">
        <h2>Artículos de Académicos</h2>
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table-descargas table table-bordered table-striped table-hover">
							<tr>
								<th>
									Titulo
								</th>
								<th>
									Descripción
								</th>
								<th>
									Autor
								</th>
								<th>
									Descargar
								</th>
							</tr>
							<tr>
								<td class="enlace-titulo">
									<a href="#"><h4>Periodismo en el Siglo XXI</h4></a>
								</td>
								<td>
									<small>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</small>
								</td>
								<td>
									<p class="text-center">
										Juan Goméz Honorato
									</p>
								</td>
								<td>
									<p class="text-center descarga">

											<a href="#">
												<i class="fa fa-3x fa-arrow-circle-down" aria-hidden="true"></i>
											</a>

									</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
      </div>
    </div>
  </section>
	<section class="seminarios-investigacion">
		<div class="container">
			<div class="row">
				<h2 class="text-right">Seminarios de Investigación</h2>
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="tabla-seminarios table table-striped">
							<tr>
								<th>
									Seminario
								</th>
								<th>
									Descripción
								</th>
								<th>
									Descargar
								</th>
							</tr>
							<tr>
								<td>
									<a href="#">
										<h4>Seminario de Inducción a Redes Sociales</h4>
									</a>
								</td>
								<td>
									<small>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</small>
								</td>
								<td>
									<p class="text-center">

											<a href="#">
												<i class="fa fa-3x fa-arrow-circle-down" aria-hidden="true"></i>
											</a>

									</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include 'include/footer.php'; ?>

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
