<?php 
    
    if(strpos($_SERVER['REQUEST_URI'], 'index.php') || (strpos($_SERVER['REQUEST_URI'], 'index.php') == "") ) {
        $index_aside = "active";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";

    }else if(strpos($_SERVER['REQUEST_URI'], 'portada.php')) {
        $index_aside= "";
        $portada_aside = "active";
        $portada_link = "current-page";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";

    }else if(strpos($_SERVER['REQUEST_URI'], 'quienes_somos.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "active";
        $quienes_link = "current-page";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";

    }else if(strpos($_SERVER['REQUEST_URI'], 'noticias.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="active";
        $noticias_link="current-page";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";

    }else if(strpos($_SERVER['REQUEST_URI'], 'clientes.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="active";
        $clientes_link="current-page";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";
        
    }else if(strpos($_SERVER['REQUEST_URI'], 'contacto.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="active";
        $contacto_link="current-page";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";
        
    }else if(strpos($_SERVER['REQUEST_URI'], 'nueva_normativa.php') || strpos($_SERVER['REQUEST_URI'], 'normativas.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="active";
        $normativa_link="current-page";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";
        
    }else if(strpos($_SERVER['REQUEST_URI'], 'pautas_de_investigación_y_examenes.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="active";
        $pautas_de_investigación_y_examenes_link="current-page";
        $perfil_aside="";
        $perfil_link=""; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";
        
    }else if(strpos($_SERVER['REQUEST_URI'], 'perfil.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="active";
        $perfil_link="current-page"; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";
        
    }else if(strpos($_SERVER['REQUEST_URI'], 'admision.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admision_aside="active";
        $admision_link="current-page";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="";
        $publicaciones_link="";
        
    }else if(strpos($_SERVER['REQUEST_URI'], 'cuerpo_docente.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admision_aside="";
        $admision_link="";
        $cuerpo_docente_aside="active";
        $cuerpo_docente_link="current-page";
        $publicaciones_aside="";
        $publicaciones_link="";
        
    }else if(strpos($_SERVER['REQUEST_URI'], 'publicaciones.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $noticias_aside="";
        $noticias_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";
        $normativa_aside="";
        $normativa_link="";
        $pautas_de_investigación_y_examenes_aside="";
        $pautas_de_investigación_y_examenes_link="";
        $perfil_aside="";
        $perfil_link=""; 
        $admisión_aside="";
        $admisión_link="";
        $cuerpo_docente_aside="";
        $cuerpo_docente_link="";
        $publicaciones_aside="active";
        $publicaciones_link="current-page";
        
    }

?>

<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><img width="50px" src="https://oxidocs.com/img/logo.svg"> <span>EasyWeb</span></a>
        </div>
        <div class="clearfix"></div>
       
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="<?php echo $index_aside; ?>"><a href="index.php"><i class="fa fa-desktop"></i> Panel Principal </a></li>
                    <li><a><i class="fa fa-home"></i> Editar Sitio Web <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <!-- class="current-page" -->
                            <li class="<?php echo $portada_aside; ?>"><a class="<?php echo $portada_link; ?>" href="portada.php">Imágenes Portada</a></li>
                            <li class="<?php echo $quienes_aside; ?>"><a class="<?php echo $quienes_link; ?>" href="quienes_somos.php">Misión / Visión</a></li>
                            <li class="<?php echo $noticias_aside; ?>"><a class="<?php echo $noticias_link; ?>" href="noticias.php">Noticias</a></li>
                            <li class="<?php echo $clientes_aside; ?>"><a class="<?php echo $clientes_link; ?>" href="galerias.php">Galeria de Imágenes</a></li>
                            <li class="<?php echo $contacto_aside; ?>"><a class="<?php echo $contacto_link; ?>" href="contacto.php">Contacto</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-share-alt"></i> Editar Redes Sociales </a></li>
                    <li><a><i class="fa fa-th-large"></i> Secciones <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <!-- class="current-page" -->
                            <li class="<?php echo $normativa_aside; ?>"><a class="<?php echo $normativa_link; ?>" href="normativas.php">Normativas</a></li>
                            <li class="<?php echo $pautas_de_investigación_y_examenes_aside; ?>"><a class="<?php echo $pautas_de_investigación_y_examenes_link; ?>" href="pautas_de_investigación_y_examenes.php">Pautas de Investigación y Exámenes</a></li>
                            <li class="<?php echo $cuerpo_docente_aside; ?>"><a class="<?php echo $cuerpo_docente_link; ?>" href="cuerpo.php">Cuerpo Docente</a></li>
                            <li class="<?php echo $publicaciones_aside; ?>"><a class="<?php echo $publicaciones_link; ?>" href="publicaciones.php">Publicaciones</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>