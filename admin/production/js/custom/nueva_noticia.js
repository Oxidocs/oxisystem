$(document).ready(function(){
	iniciarDropzone('../../img/galeria/noticias/');
});

$("select.image-select").on('change',function(){
	var dir = '../../img/galeria/noticias/';
	var option_value = $(this).val();
	if (option_value != 0) {
		$('img.avatar-portada').attr('src',dir+option_value);
	}else{
		$('img.avatar-portada').attr('src','images/user.png');
	}
});

$('form').on('submit',function(e){
	e.preventDefault();

	$("#descr").val($("#editor").html().replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'));


	$.post('../routes/noticias.php',$(this).serialize(),function(data){
		console.log(data);
	});

});