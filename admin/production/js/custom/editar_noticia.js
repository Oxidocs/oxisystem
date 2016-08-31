var array_galeria = [];
var $id, dir;
$(document).ready(function(){
	new PNotify({
		title: "PNotify",
		type: "info",
		text: "Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.",
		nonblock: {
			nonblock: true
		},
		addclass: 'dark',
		styling: 'bootstrap3',
		hide: false,
		before_close: function(PNotify) {
			PNotify.update({
				title: PNotify.options.title + " - Enjoy your Stay",
				before_close: null
			});

			PNotify.queueRemove();

			return false;
		}
	});

	$id = getParameterByName('id');
	dir = '../../img/galeria/noticias/'+$id+'/';
	iniciarDropzone(dir);
	$.get('../routes/article.php', {id: $id}, function(data){
		console.log(data);
		$('#titulo').val(data[0].titulo);
		$('#subtitulo').val(data[0].subtitulo);
		$('#editor').append(convert(data[0].descripcion));
		$("select.image-select").val(data[0].portada_contenido);
		$('img.portada-noticia').attr('src',dir+data[0].portada_contenido);
	},'json')
});

$("select.image-select").on('change',function(){
	var option_value = $(this).val();
	if (option_value != 0) {
		$('img.portada-noticia').attr('src',dir+option_value);
	}else{
		$('img.portada-noticia').attr('src','images/user.png');
	}
});

$('form').on('submit',function(e){
	e.preventDefault();

	$("#descr").val($("#editor").html().replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'));

	$.each($('#galeria').children(),function(i,val){
		if (val.className.indexOf('success') != -1) {
			array_galeria.push({'path':recuperaPath(val.children[0].children[0].children[0].src)});			
		}
	});

	options = $(this).serialize() + '&' + $.param({'galeria':array_galeria}) + '& id =' + $id;

	$.post('../routes/editar_noticia.php',options,function(data){
		console.log(data);
	});

});