<?php

    $id = 3;
    $domain = $_SERVER['HTTP_HOST'];
    $vision = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/single_vision.php?id='.$id);
    $vision = json_decode($vision);

?>
<section class="vision">
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
					<h2 >Visión</h2>
					<blockquote>
            <p><?php print_r($vision[0]->descripcion)?></p>
					</blockquote>
        </div>
        <div class="hidden-xs hidden-sm col-md-6">
            <img class="img-responsive" src="img/vision.png" alt="">
        </div>
    	</div>
    </div>
  </section>