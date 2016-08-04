$(document).ready(function(){
	iniciarDropzone('../../img/ps-img/');
});

$("select.image-select").on('change',function(){
	var dir = '../../img/ps-img/';
	var option_value = $(this).val();
	if (option_value != 0) {
		$('img.avatar-portada').attr('src',dir+option_value);
	}else{
		$('img.avatar-portada').attr('src','images/user.png');
	}
});

$('#btnSave').bind('click', function () {
    $("#descr").val($("#editor").html().replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'));
});

$("#agregar_portada").on('click',function(){

	var table_portada = '<tr>'+
		'<td style="width:10%">'+
		'<img src="images/user.png" class="" alt="Avatar">'+
		'</td>'+
		'<td>'+
		'<div class="col-lg-6 form-group">'+
		'<label class="col-sm-2">Nombre</label>'+
		'<div class="col-sm-10">'+
		'<input type="text" name="nombre" class="form-control table-input">'+
		'</div>'+
		'</div>'+
		'<div class="col-lg-6 form-group">'+
		'<label class="col-sm-2">Imagen</label>'+
		'<div class="col-sm-10">'+
		'<select class="form-control image-select">'+
		'<option>Selecionar Imagen</option>'+
		'</select>'+
		'</div>'+
		'</div>'+
		'<div class="clearfix"></div>'+
		'<div class="tiles">'+
		'<div class="col-lg-12 form-group text-center">'+
		'<label>Descripción</label>'+
		'<div id="alerts"></div>'+
		'<div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">'+
		'<div class="btn-group">'+
		'<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>'+
		'<ul class="dropdown-menu"></ul>'+
		'</div>'+
		'<div class="btn-group">'+
		'<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>'+
		'<ul class="dropdown-menu">'+
		'<li>'+
		'<a data-edit="fontSize 5">'+
		'<p style="font-size:17px">Huge</p>'+
		'</a>'+
		'</li>'+
		'<li>'+
		'<a data-edit="fontSize 3">'+
		'<p style="font-size:14px">Normal</p>'+
		'</a>'+
		'</li>'+
		'<li>'+
		'<a data-edit="fontSize 1">'+
		'<p style="font-size:11px">Small</p>'+
		'</a>'+
		'</li>'+
		'</ul>'+
		'</div>'+
		'<div class="btn-group">'+
		'<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>'+
		'<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>'+
		'<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>'+
		'<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>'+
		'</div>'+
		'<div class="btn-group">'+
		'<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>'+
		'<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>'+
		'<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>'+
		'<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>'+
		'</div>'+
		'<div class="btn-group">'+
		'<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>'+
		'<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>'+
		'<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>'+
		'<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>'+
		'</div>'+
		'<div class="btn-group">'+
		'<a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>'+
		'<div class="dropdown-menu input-append">'+
		'<input class="span2" placeholder="URL" type="text" data-edit="createLink" />'+
		'<button class="btn" type="button">Add</button>'+
		'</div>'+
		'<a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>'+
		'</div>'+
		'<div class="btn-group">'+
		'<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>'+
		'<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>'+
		'</div>'+
		'</div>'+
		'<div id="editor" class="editor-wrapper"></div>'+
		'<textarea name="descr" id="descr" style="display:none;"></textarea>'+
		'</div>'+
		'</div>'+
		'</td>'+
		'</tr>';

	$("#table_portada").append(table_portada);

});

