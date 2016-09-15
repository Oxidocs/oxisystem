<?php

    $id = 2;
    $domain = $_SERVER['HTTP_HOST'];
    $mision = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/single_mision.php?id='.$id);
    $mision = json_decode($mision);

?>
<section class="mision">
    	<div class="container">
    		<div class="row">
    			<div class="hidden-xs hidden-sm col-md-6">
                	<img class="img-responsive" src="img/mision.png" alt="">
            	</div>
            	<div class="col-md-6">
					<h2 class="text-right">Misión</h2>
					<blockquote class="blockquote-reverse">
					  <p class="text-right"><?php print_r($mision[0]->descripcion)?></p>
					</blockquote>
            	</div>
    		</div>
    	</div>
  </section>