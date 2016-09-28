<?php
    $id = 6;
    $domain = $_SERVER['HTTP_HOST'];
    $articulos = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/single_articulo.php?id='.$id);
    $articulos = json_decode($articulos);
    if(!$articulos[0]->imagenes == null){
?>
<section class="descargas">
    <div class="container">
      <div class="row">
        <h2>Artículos de Académicos <?php print_r($articulos[0]->imagenes);?></h2>
				<div class="col-md-12">
					<div class="table-responsive">
						<table id="example" class="table-descargas table table-bordered table-striped table-hover display">
							<tr>
								<th>
									Titulo
								</th>
								<th>
									Descripción
								</th>
								
								<th>
									Descargar
								</th>
							</tr>
							<?php
					       
					        $i=0;
					        foreach ($articulos[0]->imagenes as $articulo)
					        {
					        ?>
							<tr>
								<td class="enlace-titulo">
									<a target="_blank" href="docs/articulos_academicos/<?php echo $articulo->PATH;?>"><h4><?php echo $articulo->TITULO;?></h4></a>
								</td>
								<td>
									<small>
										<?php echo $articulo->DESCRIPCION;?>
									</small>
								</td>
								<td>
									<p class="text-center descarga">

											<a target="_blank" href="docs/articulos_academicos/<?php echo $articulo->PATH;?>">
												<i class="fa fa-3x fa-arrow-circle-down" aria-hidden="true"></i>
											</a>

									</p>
								</td>
							</tr>
							<?php
							}
							?>
						</table>
					</div>
				</div>
      </div>
    </div>
  </section>
  <?php 
  }
  ?>