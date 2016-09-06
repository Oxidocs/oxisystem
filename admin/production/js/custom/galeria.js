var array_galeria = [];
$(document).ready(function(){
	iniciarDropzone('../../img/galeria/home/');
});

$('form').on('submit',function(e){
	e.preventDefault();

	$.each($('#galeria').children(),function(i,val){
		if (val.className.indexOf('success') != -1) {
			array_galeria.push({'path':recuperaPath(val.children[0].children[0].children[0].src)});
		}
	});

	options = $.param({'galeria':array_galeria});
	console.log(options);

	/*$.post('../routes/noticias.php',options,function(data){
		console.log(data);
	},'json').done(function(data){
		new PNotify({
			title: data,
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
	});*/

});

//recupera nombre de archivo ---------------------------------------------------------------------------------
function recuperaPath(url) {
	var result = url.match(/[-_\w]+[.][\w]+$/i)[0];
	return result;
}