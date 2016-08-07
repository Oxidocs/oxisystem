$(document).ready(function(){
	iniciarDropzone('../../img/slider-img/');
});

$("select.image-select").on('change',function(){
	var dir = '../../img/slider-img/';
	var option_value = $(this).val();
	if (option_value != 0) {
		$('img.avatar-portada').attr('src',dir+option_value);
	}else{
		$('img.avatar-portada').attr('src','images/user.png');
	}
});
var i = 1;
$("#agregar_portada").on('click',function(){
	var table_portada = '<tr id=fila'+i+'>'+
	                    '<td><img src="images/user.png" class="avatar avatar-portada'+i+' center-block" alt="Avatar"></td>'+
						'<td>'+
	                    '<select class="form-control image-select table-input">'+
	                    '<option value="0"> Seleccionar Imagen </option>'+
	                    '</select>'+
	                    '</td>'+
	                    '<td>'+
						'<input type="text" name="titulo" class="form-control table-input" size="20">'+
	                    '</td>'+
	                    '<td>'+
                        '<input type="text" name="descripcion" class="form-control table-input" size="30">'+
	                    '</td>'+
	                    '<td>'+
	                    '<select class="form-control table-input">'+
	                    '<option value="0"> Seleccionar Estado </option>'+
	                    '<option value="eliminar"> Eliminar </option>'+
	                    '</select>'+
	                    '</td>'+
	                    '</tr>';
	$("#table_portada").append(table_portada);
	i++;
});