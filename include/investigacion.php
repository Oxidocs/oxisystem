<?php
    $id = 7;
    $domain = $_SERVER['HTTP_HOST'];
    $articulos = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/single_articulo.php?id='.$id);
    $articulos = json_decode($articulos);
?>
<section class="seminarios-investigacion">
		<div class="container">
			<div class="row">
				<div class="pull-right">
					<h2 class="text-right">Seminarios de Investigación</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-12">
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