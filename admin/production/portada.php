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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Dropzone Style -->
    <link href="../src/css/dropzone.css" type="text/css" rel="stylesheet" />
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
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Subir Imágenes</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="dropzone" class="dropzone"></div>
                        </div>
                    </div>
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Portada</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Miniatura</th>
                                            <th>Imagen</th>
                                            <th>Titulo</th>
                                            <th>Descripción</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_portada" class="form-group">
                                        <tr>
                                            <td><img src="images/user.png" class="avatar avatar-portada center-block" alt="Avatar"></td>
                                            <td>
                                                <select class="form-control image-select table-input">
                                                    <option value="0"> Seleccionar Imagen </option>
                                                </select>                                               
                                            </td>
                                            <td>
                                                <input type="text" name="titulo" class="form-control table-input" size="20">
                                            </td>
                                            <td>
                                                <input type="text" name="descripcion" class="form-control table-input" size="30">
                                            </td>
                                            <td>
                                                <select class="form-control table-input">
                                                    <option value="0"> Seleccionar Estado </option>
                                                    <option value="eliminar"> Eliminar </option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="">
                                <button id="agregar_portada" type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> &nbsp;Agregar Portada </button>
                                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> &nbsp; Guardar Cambios </button>
                            </div>
                        </div>
                    </div>
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
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- Dropzone Scripts -->
    <script src="../src/js/dropzone.js"></script>
    <script src="../src/js/dropzone-custom.js" type="text/javascript"></script>
    <!--Custom JS-->
    <script src="js/custom/portada.js" type="text/javascript"></script>
</body>
</html>
