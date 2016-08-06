<?php 
    
    if(strpos($_SERVER['REQUEST_URI'], 'index.php')) {
        $index_aside = "active";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $productos_servicios_aside="";
        $productos_servicios_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";

    }else if(strpos($_SERVER['REQUEST_URI'], 'portada.php')) {
        $index_aside= "";
        $portada_aside = "active";
        $portada_link = "current-page";
        $quienes_aside = "";
        $quienes_link = "";
        $productos_servicios_aside="";
        $productos_servicios_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";

    }else if(strpos($_SERVER['REQUEST_URI'], 'quienes_somos.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "active";
        $quienes_link = "current-page";
        $productos_servicios_aside="";
        $productos_servicios_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";

    }else if(strpos($_SERVER['REQUEST_URI'], 'productos_servicios.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $productos_servicios_aside="active";
        $productos_servicios_link="current-page";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="";
        $contacto_link="";

    }else if(strpos($_SERVER['REQUEST_URI'], 'clientes.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $productos_servicios_aside="";
        $productos_servicios_link="";
        $clientes_aside="active";
        $clientes_link="current-page";
        $contacto_aside="";
        $contacto_link="";
        
    }else if(strpos($_SERVER['REQUEST_URI'], 'contacto.php')) {
        $index_aside= "";
        $portada_aside = "";
        $portada_link = "";
        $quienes_aside = "";
        $quienes_link = "";
        $productos_servicios_aside="";
        $productos_servicios_link="";
        $clientes_aside="";
        $clientes_link="";
        $contacto_aside="active";
        $contacto_link="current-page";
        
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
                            <li class="<?php echo $productos_servicios_aside; ?>"><a class="<?php echo $productos_servicios_link; ?>" href="productos_servicios.php">Noticias</a></li>
                            <li class="<?php echo $clientes_aside; ?>"><a class="<?php echo $clientes_link; ?>" href="clientes.php">Galeria de Imágenes</a></li>
                            <li class="<?php echo $contacto_aside; ?>"><a class="<?php echo $contacto_link; ?>" href="contacto.php">Contacto</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-facebook-square"></i> Editar Redes Sociales </a></li>
                    <li><a><i class="fa fa-th-large"></i> Secciones <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <!-- class="current-page" -->
                            <li class=""><a class="" href="#">Normativas</a></li>
                            <li class=""><a class="" href="#">Pautas de Investigación y Exámenes</a></li>
                            <li class=""><a class="" href="#">Perfil</a></li>
                            <li class=""><a class="" href="#">Admisión</a></li>
                            <li class=""><a class="" href="#">Cuerpo Docente</a></li>
                            <li class=""><a class="" href="#">Publicaciones</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>