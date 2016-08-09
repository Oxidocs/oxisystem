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
    console.log($("#descr").val());
});