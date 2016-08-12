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
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Crear Noticia</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Imágen</th>
                                            <th>Noticia</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_portada" class="form-group">
                                        <tr>
                                            <td style="width:10%">
                                                <img src="images/user.png" class="" alt="Avatar">
                                            </td>
                                            <td>
                                                <div class="col-lg-6 form-group">
                                                    <label class="col-sm-2">Titulo</label>
                                                    <div class="col-sm-10">
                                                        <input id="nombre" type="text" name="nombre" class="form-control table-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label class="col-sm-2">Imagen</label>
                                                    <div class="col-sm-10">
                                                        <select id="imagen" name="imagen" class="form-control image-select">
                                                            <option>Selecionar Imagen</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <label class="col-sm-1">Bajada</label>
                                                    <div class="col-sm-11">
                                                        <input id="bajada" type="text" name="bajada" class="form-control table-input">
                                                    </div>                                            
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="tiles">
                                                    <div class="col-lg-12 form-group text-center">
                                                        <label>Descripción</label>
                                                        <div id="alerts"></div>
                                                        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                                                            <div class="btn-group">
                                                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                                                <ul class="dropdown-menu"></ul>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a data-edit="fontSize 5">
                                                                            <p style="font-size:17px">Huge</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-edit="fontSize 3">
                                                                            <p style="font-size:14px">Normal</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-edit="fontSize 1">
                                                                            <p style="font-size:11px">Small</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                                                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                                                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                                                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                                                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                                                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                                                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                                                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                                                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                                                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                                                <div class="dropdown-menu input-append">
                                                                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                                                    <button class="btn" type="button">Add</button>
                                                                </div>
                                                                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                                                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                                            </div>
                                                        </div>
                                                        <div id="editor" class="editor-wrapper"></div>
                                                        <textarea name="descr" id="descr" style="display:none;"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <button id="btnSave" type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> &nbsp;Guardar Cambios </button> -->
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
                            <div class="x_content">
                                <div class="col-md-55">
                                    <div class="thumbnail">
                                        <div class="image view view-first">
                                            <img src="../../img/ps-img/20160801_115852.jpg" alt="image" class="img-responsive center-block" />
                                            <div class="mask">
                                                <p>Your Text</p>
                                                <div class="tools tools-bottom">
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption text-center">
                                            <p>Nombre Imagen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>                        
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
    <script src="../src/js/dropzone-noticia.js" type="text/javascript"></script>
    <!--Custom JS-->
    <script src="js/custom/nueva_noticia.js" type="text/javascript"></script>
    <script src="js/custom/wyswyg.js"></script>
</body>
</html>
