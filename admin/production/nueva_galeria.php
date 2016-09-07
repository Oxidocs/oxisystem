<?include('../controllers/listar_archivos.php');?>
<!DOCTYPE html>
<html lang="ES-CL">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nombre Empresa | Administración</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Dropzone Style -->
    <link href="../src/css/dropzone.css" type="text/css" rel="stylesheet" />
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="css/custom/style.css" type="text/css" rel="stylesheet" />
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php 
                include("aside.php");
                include("nav.php");
            ?>
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="clearfix"></div>
                <div class="row">
                    <form>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Subir Imágenes</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div id="dropzone" class="dropzone">
                                    <div class="dz-message">Carga aquí tus imágenes 
                                        <br /> 
                                        <i class="fa fa-cloud-upload fa-5x" aria-hidden="true" style="color: #a1d302;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="x_panel cargar_galeria">
                        <div class="x_title">
                                <h2>Galería de Imágenes</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        <div class="row">
                                    <div class="col-sm-4 col-xs-12 vcenter">
                                        <img src="../../img/default.png" class="img-responsive portada-noticia center-block" alt="portada" style="max-height:200px;min-height:200px">
                                    </div>
                                    <div class="col-sm-7 col-xs-12 vcenter">
                                        <div class="form-group">                               
                                            <label>Portada Galeria</label>
                                                <select id="portada" name="portada" class="form-control image-select text-center">
                                                    <option>Selecionar Imagen</option>
                                                </select>   
                                        </div>     
                                        <div class="form-group">                                
                                            <label>Nombre Galeria</label>
                                            <input id="titulo" type="text" name="titulo" class="col-lg-12 form-control" placeholder="Galeria Aniversario 10">
                                        </div>                                    
                                        
                                    </div>
                            </div> 
                            <hr> 

                            <div id="galeria" class="x_content"></div>                            
                        </div>
                        <button id="btnSave" type="submit" class="btn btn-success pull-right"> Publicar Noticia </button>
                        <button type="submit" class="btn btn-default pull-right"> Dejar como Borrador </button>
                    </form>
                </div>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Powered by <a href="https://oxidocs.com">Oxido Creative Studio</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <!-- jQuery -->
     <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- Dropzone Scripts -->
    <script src="../src/js/dropzone.js"></script>
    <script src="../src/js/dropzone-galeria.js" type="text/javascript"></script>
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!--Custom JS-->
    <script src="js/custom/nueva_galeria.js" type="text/javascript"></script>
  
</body>
</html>
