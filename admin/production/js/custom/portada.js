var i = 1;


$(document).ready(function(){
	iniciarDropzone('../../img/slider-img/');

});



$("#agregar_portada").on('click',function(){
	if (i<=4) 
	{
		var table_portada = '<tr id=fila'+i+'>'+
		                    '<td><img src="images/user.png" class="avatar avatar-portada'+i+' center-block" alt="Avatar"></td>'+
							'<td>'+
		                    '<select id="'+i+'" name="select_img'+i+'" class="form-control image-select table-input" onchange="cambiaImg(this.id)">'+
		                    '<option value="0"> Seleccionar Imagen </option>'+
		                    '</select>'+
		                    '</td>'+
		                    '<td>'+
							'<input id="titulo'+i+'" name="titulo'+i+'" type="text" class="form-control table-input" size="20">'+
		                    '</td>'+
		                    '<td>'+
	                        '<input id="descripcion'+i+'" name="descripcion'+i+'" type="text" class="form-control table-input" size="30">'+
		                    '</td>'+
		                    '<td>'+
		                    '<select id="estados'+i+'" name="estados'+i+'" class="form-control table-input">'+
		                    '<option value="0"> Seleccionar Estado </option>'+
		                    '<option value="eliminar"> Eliminar </option>'+
		                    '</select>'+
		                    '</td>'+
		                    '</tr>';
		$("#table_portada").append(table_portada);
		cargar_select_img(i);
		i++;
	}
});
function cargar_select_img(i)
{
	$.post('../controllers/listar_archivos.php', {dir:'../../img/slider-img/'},function(data){
		console.log(data);
                    $('#'+i).empty();
                    $('#'+i).append('<option value="0"> Seleccionar Imagen </option>');
                    $.each(data,function(index,value){
                        $('#'+i).append(value);
                    });
                },'json').error(function(e){
                    alert('Se ha producido un error al cargar, refresque la página para volver a intentarlo');
                });
}
function cambiaImg(id)
{
	console.log(id);
	var dir = '../../img/slider-img/';
	var option_value = $('#'+id).val();
	
	
	if (option_value != 0) {
		$('img.avatar-portada'+id).attr('src',dir+option_value);
	}else{
		$('img.avatar-portada'+id).attr('src','images/user.png');
	}
}
function setImg()
{
	
	var dir = '../../img/slider-img/';
	
	
	
	
		$('img.avatar').attr('src','images/user.png');
	
}
