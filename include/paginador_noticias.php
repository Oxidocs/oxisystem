<?php
$json = "";
$domain = $_SERVER['HTTP_HOST'];
if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
    $limite_desde = ($_REQUEST['id'] - 1) * 3;
    $json = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/paginador_noticias.php?limite_desde='.$limite_desde);
}
$cant_noticias = file_get_contents('http://'.$domain.'/oxisystem/admin/routes/paginador_noticias.php');
$objs2 = json_decode($cant_noticias);
$numrows = count($objs2);
$total_pages = ceil($numrows/3);
$objs = json_decode($json);
setlocale(LC_TIME, 'es_ES.UTF-8');
?>
<!-- aglutinador noticias -->
<!-- Projects Row -->
<div class="row aglutinador">
    <div class="row">
        <div class="aglunoticias">
            <h4 class="col-lg-3 col-md-3 col-xs-12">NOTICIAS</h4>
        </div>
    </div>
    <?php
    if(!$objs == null){
    $i=0;
    foreach ($objs as $obj)
    {
    ?>
    <div class="col-md-4 img-portfolio">
        <a href="single-noticias.php?id=<?php echo $obj->id; ?>">
            <img class="img-responsive img-hover" src="img/galeria/noticias/<?php echo $obj->id.'/'.$obj->portada_contenido; ?>" alt="">
        </a>
        <h3>
            <a href="single-noticias.php?id=<?php echo $obj->id; ?>">
                <?php echo $obj->titulo; ?>
            </a>
        </h3>
        <p>
            <?php
        $texto =  strip_tags(html_entity_decode($obj->descripcion, ENT_NOQUOTES));
        
        echo substr($texto, 0, 100)."...";
        ?>
        </p>
        <p class="fecha"><i class="fa fa-clock-o"></i>Publicado el <?php  $date = date_create($obj->fecha_creacion);
                $dia = date_format($date, 'd');
                $mes = date_format($date, 'm');
                $anio = date_format($date, 'Y');
                $miFecha = gmmktime(12,0,0,$mes,$dia,$anio);
                echo strftime("%A, %d de %B de %Y", $miFecha);?></p>
    <hr>
    <p>
    </div>
    <?php
    }
    }
    else
    {
    ?>        
    <div class="col-md-4 img-portfolio">
        <a href="portfolio-item.html">
            <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
        </a>
        <h3>
        <a href="single-noticias.php">
            Investigación de Académicas de Periodismo es Publicado por Sitio SciELO
        </a>
        </h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.
        </p>
    </div>
    <?php 
    }
    ?>
</div>
<!-- /.row -->
<!-- Pagination -->
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="noticias.php?id=<?php echo $_REQUEST['id']-1;?>">&laquo;</a>
            </li>
            <?php for ($i=1; $i <= $total_pages; $i++) { 
                if ($_REQUEST['id'] == $i) {
                    $clase = "active";
                    # code...
                }
                else
                {
                    $clase = "";
                }
            ?>
            
            <li class="<?php echo $clase; ?>">
                <a href="noticias.php?id=<?php echo $i;?>"><?php echo $i;?></a>
            </li>
            
            <?php
            }
            ?>
            <li>
                <a href="noticias.php?id=<?php echo $_REQUEST['id']+1;?>">&raquo;</a>
            </li>
            
        </ul>
    </div>
</div>
<!-- /.row -->