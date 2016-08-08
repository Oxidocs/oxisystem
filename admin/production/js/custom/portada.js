var i = 0;
$(document).ready(function(){
	iniciarDropzone('../../img/slider-img/');
	cargar_portada();
	cargar_datos_portada();


});


//----------------------------------------------------------------------------------------------------------
$("#agregar_portada").on('click',function(){
	
	agregar_filas();
});
//----------------------------------------------------------------------------------------------------------
function agregar_filas()
{
	if (i<=4) 
	{	
		var table_portada = '<tr id=fila'+i+'>'+
		                    '<td><img id="img_portada'+i+'" name="img_portada'+i+'" src="../../img/default.png" class="avatar avatar-portada'+i+' center-block" alt="Avatar"></td>'+
							'<td>'+
		                    '<select id="'+i+'" name="select_img'+i+'" class="form-control image-select table-input" onchange="cambiaImg(this.id)">'+
		                    '<option value="0"> Seleccionar Imagen </option>'+
		                    '</select>'+
		                    '</td>'+
		                    '<td>'+
							'<input id="titulo'+i+'" name="titulo'+i+'" type="text" class="form-control table-input" size="20" placeholder="Ingresa un titulo">'+
		                    '</td>'+
		                    '<td>'+
	                        '<input id="descripcion'+i+'" name="descripcion'+i+'" type="text" class="form-control table-input" size="30" placeholder="Descripcion de la Imagen o Portada">'+
		                    '</td>'+
		                    '<td>'+
		                    '<select id="estados'+i+'" name="estados'+i+'" class="form-control table-input">'+
		                    '<option value="1"> Activa </option>'+
		                    '<option value="0"> Inactiva </option>'+
		                    '</select>'+
		                    '</td>'+
		                    '<td>'+
	                        '<a href="javascript:void(0);" onclick="eliminar_filas('+i+')" >eliminar</a>'+
		                    '</td>'+
		                    '</tr>';
		$("#table_portada").append(table_portada);
		cargar_select_img(i);
		i++;
	}
}

//----------------------------------------------------------------------------------
function eliminar_filas(id)
{ console.log("elimino");
	elemento=document.getElementById("fila"+id);
	elemento.parentNode.removeChild(elemento);
	i = i-1;
	console.log(i);
}
//--------------------------------------------------------------------------------------------------------
function cargar_portada()
{
	$.getJSON("../controllers/slider.php?action=listar", function(json) {
	    //console.log(json); // this will show the info it in firebug console
	    $.each(json, function(i,item){
			agregar_filas();
			
		});
	});
}
//-------------------------------------------------------------------------------------------------------
function cargar_datos_portada()
{
	$.getJSON("../controllers/slider.php?action=listar", function(json) {
	    //console.log(json); // this will show the info it in firebug console
	    $.each(json, function(i,item){
			
			$('img.avatar-portada'+i).attr('src',json[i].PATH);
			var nombre_img = recuperaPath(json[i].PATH);
			$('#titulo'+i).val(json[i].TITULO);
			$('#descripcion'+i).val(json[i].DESCRIPCION);
			SetSelect(i,nombre_img);
			
		});
	});
}
//--------------------------------------------------------------------------------------------------------
function cargar_select_img(i)
{
	$.post('../controllers/listar_archivos.php', {dir:'../../img/slider-img/'},function(data){
		
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
	//console.log(id);
	var dir = '../../img/slider-img/';
	var option_value = $('#'+id).val();
	
	
	if (option_value != 0) {
		$('img.avatar-portada'+id).attr('src',dir+option_value);
	}else{
		$('img.avatar-portada'+id).attr('src','../../img/default.png');
	}
}
function setImg()
{
	
	var dir = '../../img/slider-img/';	
	$('img.avatar').attr('src','../../img/default.png');
	
}
function existeUrl(url) {
   var http = new XMLHttpRequest();
   http.open('HEAD', url, false);
   http.send();
   return http.status!=404;
}
var getLocation = function(href) {
    var l = document.createElement("a");
    l.href = href;
    return l;
};
function comparaCadena(cadena, palabra){
	if (cadena.indexOf(palabra)==-1)
	{
		console.log("palabra NO encontrada");
		return false;
	}
	else
	{
		console.log("palabra encontrada");
		return true;
	}
}
//selecciona un select por el value
function SelectElement(valueToSelect, id)
{    
    var element = document.getElementById(id);
    element.value = valueToSelect;
}
function SetSelect(id,value)
{	
	console.log(id+" "+value)
	$('select #'+id).val("value");
	console.log("seteado");
}
//recupera nombre de archivo
function recuperaPath(url)
{
	var result = url.match(/[-_\w]+[.][\w]+$/i)[0];
	return result;
}
