var array_galeria = [];
var $id, dir;
$(document).ready(function(){
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

	options = $(this).serialize() + '&' + $.param({'galeria':array_galeria});

	// $.post('../routes/noticias.php',options,function(data){
	// 	console.log(data);
	// });

});