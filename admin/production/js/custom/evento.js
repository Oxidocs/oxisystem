$(document).ready(function(){
	
});

$('form').on('submit',function(e){
	e.preventDefault();
	if ($('#fecha_inicio').val() != "") {
	console.log($(this).serialize());
	$.post('../controllers/controlador_calendario.php',$(this).serialize(),function(data){
		console.log(data);
	},'json').done(function(data){
		console.log(data);
		$(".buttonFinish").attr('disabled','disabled');
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
	});
}
else
{
	new PNotify({
			title: '¡No deje datos en blanco!',
			text: 'Ingrese los datos correctamente',
			type: 'error',
			styling: 'bootstrap3'
		});
}

});