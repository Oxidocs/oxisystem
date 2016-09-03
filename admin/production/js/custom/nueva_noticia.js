var array_galeria = [];
$(document).ready(function(){
	iniciarDropzone('../../img/galeria/tmp/');
});

$("select.image-select").on('change',function(){
	var dir = '../../img/galeria/tmp/';
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

	$.post('../routes/noticias.php',options,function(data){
		
	},'json').done(function(data){
		new PNotify({
			title: data.mensaje,
			type: 'success',
			styling: 'bootstrap3'
		})
	}).error(function(){
		new PNotify({
			title: '¡Error al comunicarse con Base de Datos!',
			text: 'Verifique su conexión a internet',
			type: 'error',
			styling: 'bootstrap3'
		});
	});

});

//recupera nombre de archivo ---------------------------------------------------------------------------------
function recuperaPath(url) {
	var result = url.match(/[-_\w]+[.][\w]+$/i)[0];
	return result;
}