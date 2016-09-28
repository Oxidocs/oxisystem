<?php

    $domain = $_SERVER['HTTP_HOST'];
    $galerias = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/single_galeria.php?id=4');
    $galerias = json_decode($galerias);
  
  
            
    	if ($galerias[0]->imagenes) { # code...
    		          
?>
<!-- Galerías -->
	<section class="galerias">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2><i class="fa fa-camera" aria-hidden="true"></i> Galerías Fotográficas</h2>
				</div>
				<?php foreach ($galerias[0]->imagenes as $imagen) { ?>
				<div class="col-md-3 col-sm-6">
					<a href="img/galeria/galeria/4<?php print_r('/'.$imagen->PATH);?>" data-lightbox="logo" data-title="<?php print_r($imagen->TITULO);?>">
            <div class="col-md-3 hover" style="height: 256px;width: 100%;border: 2px solid white;  background-repeat: no-repeat;background-size: cover;background-position: center; background-image: url(img/galeria/galeria/4<?php print_r('/'.$imagen->PATH);?>);">
              
            </div>
            </a>
				</div>
				<?php }?>
			</div>
		</div>
	</section>
<?php
			
		}
?>