<?php

  if ($_REQUEST['id'] && is_numeric($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $domain = $_SERVER['HTTP_HOST'];
    $articles = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/article.php?id='.$id);
    $articles = json_decode($articles);

  }

?>
<!-- contenido -->
<article class="single-noticia">
    <div class="container">
      <div class="row">
        <div class="col-md-9 single">
          <h2><?php echo $articles[0]->titulo; ?></h2>
          <p class="fecha"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo 'Publicado el : '.$articles[0]->fecha_creacion; ?></p>
            <img src='<?php echo "img/galeria/noticias/".$id."/".$articles[0]->portada_contenido; ?>' alt="" class="img-responsive center-block">
          <div class="row sharing">
            <div class="col-md-4 compartir">
							<small class="comp">COMPARTIR:</small>
							<div class="smallt">
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
              </div>
            </div>
					</div>
          <div class="row galerianoticia">
            <div class="col-md-3">
              <a href="http://placehold.it/700x450&text=Foto 1" data-lightbox="logo" data-title="My caption">
                <img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Foto 1" alt="">
              </a>
            </div>
            <div class="col-md-3">
              <a href="http://placehold.it/700x450&text=Foto 2" data-lightbox="logo" data-title="My caption">
                <img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Foto 2" alt="">
              </a>
            </div>
            <div class="col-md-3">
              <a href="http://placehold.it/700x450&text=Foto 3" data-lightbox="logo" data-title="My caption">
                <img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Foto 3" alt="">
              </a>
            </div>
            <div class="col-md-3">
              <a href="http://placehold.it/700x450&text=Foto 4" data-lightbox="logo" data-title="My caption">
                <img class="img-responsive img-hover" src="http://placehold.it/700x450&text=Foto 4" alt="">
              </a>
            </div>
          </div>

          <?php
            echo html_entity_decode($articles[0]->descripcion)
          ?>
        </div>

        <div class="redessociales pull-left hidden-xs hidden-sm col-md-3">

          <!-- twitter-->
          <div>
            <a class="twitter-timeline" data-height="400" href="https://twitter.com/userena">Tweets by userena</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
      </div>
    </div>
  </article>
