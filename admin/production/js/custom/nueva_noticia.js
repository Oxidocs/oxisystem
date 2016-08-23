$(document).ready(function(){
	iniciarDropzone('../../img/galeria/tmp/');
});

$("select.image-select").on('change',function(){
	var dir = '../../img/galeria/tmp/';
	var option_value = $(this).val();
	if (option_value != 0) {
		$('img.portada-noticia').attr('src',dir+option_value);
		console.log("aca");
	}else{
		$('img.portada-noticia').attr('src','images/user.png');
	}
});

$('form').on('submit',function(e){
	e.preventDefault();

	$("#descr").val($("#editor").html().replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'));


	$.post('../routes/noticias.php',$(this).serialize(),function(data){
		console.log(data);
	});

});