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
    <!-- Summernote editor -->
    <link href="../summernote/summernote.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Misión</h2>
                                <div class="clearfix"></div>
                            </div>
                            <form action="../controllers/test.php" method="POST">
                                <div class="x_content">
                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#">
                                        <div class="btn-group">
                                            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
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
                                    <br />
                                    <button id="btnSave" type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> &nbsp;Guardar Cambios </button>
                                </div>
                            </form>
                        </div>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Visión</h2>
                                <div class="clearfix"></div>
                            </div>
                            <form action="../controllers/test.php" method="POST">
                                <div class="x_content">
                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor_vision">
                                        <div class="btn-group">
                                            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
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
                                    <div id="editor_vision" class="editor-wrapper"></div>
                                    <textarea name="descr" id="descr" style="display:none;"></textarea>
                                    <br />
                                    <button id="btnSave" type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> &nbsp;Guardar Cambios </button>
                                </div>
                            </form>
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

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Summernote editor -->
    <script src="../summernote/summernote.min.js" type="text/javascript"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="js/custom/wyswyg.js"></script>
    <script src="js/custom/quienes.js"></script>

</body>
</html>
