$(document).ready(function() {
	$('.summernote').summernote({
		toolbar: [
			['font', ['bold', 'italic', 'underline', 'clear']],
			['insert', ['link']],
		],
		height: 300,                 // set editor height
		minHeight: 150,             // set minimum height of editor
		maxHeight: 300,             // set maximum height of editor
		lang: 'es-ES'
	});
});

$('form').on('submit', function (e) {

	e.preventDefault();

	var form_id = $(this).attr('id');
	var text_area_id = $('#'+form_id+' div div.summernote').attr('id');
	var text_area = $('#'+text_area_id).summernote('code');

	$.post($(this).attr('action'),{data: text_area},function(data){
		console.log(data);
	});

});