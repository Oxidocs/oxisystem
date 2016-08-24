function iniciarDropzone(url){
    Dropzone.options.dropzone = {
        autoProcessQueue: true,
    };
    Dropzone.autoDiscover = false;
    $("#dropzone").dropzone({
        init: function(){
            thisDropzone = this;
            $.get('../controllers/upload-images.php?dir='+url, function(data) {
                $.each(data, function(key,value){
                    var mockFile = { name: value.name, size: value.size };
                    thisDropzone.options.addedfile.call(thisDropzone, mockFile);
                    thisDropzone.options.thumbnail.call(thisDropzone, mockFile, url+value.name);
                    $('.dz-image img').addClass("img-thumb-dropzone");
                });
                $.post('../controllers/listar_archivos.php', {dir:url},function(data){
                    //console.log(url);
                    $('select.image-select').empty();
                    $('select.image-select').append('<option value="0"> Seleccionar Imagen </option>');
                    $.each(data,function(index,value){
                        $('select.image-select').append(value);
                    });
                },'json').error(function(e){
                    alert('Se ha producido un error al cargar, refresque la página para volver a intentarlo');
                });

                $.post('../controllers/upload-images.php?dir='+url, {dir:'dir_galeria'},function(data){
                    //console.log(url);
                    
                    $.each(data,function(index,value){
                        var img_galeria = "";
                        img_galeria += '<div class="col-md-55">';
                        img_galeria += '<div class="thumbnail form-control">';
                        img_galeria += '<div class="image view view-first">';
                        img_galeria += '<img src="../../img/galeria/tmp/'+value.name+'" alt="image" class="img-responsive center-block" />';
                        img_galeria += '<div class="mask">';
                        img_galeria += '<p>Your Text</p>';
                        img_galeria += '<div class="tools tools-bottom">';
                        img_galeria += '<a class="check_img"><i class="fa fa-check"></i></a>';
                        img_galeria += '</div>';
                        img_galeria += '</div>';
                        img_galeria += '</div>';
                        img_galeria += '</div>';
                        img_galeria += '</div>';
                        $('#galeria').append(img_galeria);

                    });
                },'json').done(function(){
                    $('.check_img').on('click',function(){
                        if ($(this).parent().parent().parent().parent().parent().attr('class').indexOf('success') == -1) {
                            $(this).parent().parent().parent().parent().parent().addClass('has-success');
                            $(this).children().attr('class','fa fa-times');
                        }else{
                            $(this).parent().parent().parent().parent().parent().removeClass('has-success');
                            $(this).children().attr('class','fa fa-check');
                        }
                    });
                }).error(function(e){
                    alert('Se ha producido un error al cargar, refresque la página para volver a intentarlo');
                });
            });
        },
        url: "../controllers/upload-images.php?dir="+url,
        maxFilesize: 10, //in MB
        maxFiles: 5,
        parallelUploads: 5,
        addRemoveLinks: true,
        dictMaxFilesExceeded: "Sólo puedes subir 5 imágenes a la vez",
        dictRemoveFile: "X",
        dictCancelUploadConfirmation: "¿Estás seguro de cancelar la carga?",
        dictResponseError: "Ha ocurrido un error al intentar cargar el acrchivo",
        acceptedFiles: '.jpeg,.jpg,.JPEG,.JPG,.png,.PNG,.svg,.SVG,.JPEG,.jpeg',
        success : function(file, response){
            $.post('../controllers/listar_archivos.php', {dir:url},function(data){
                    $('select.image-select').empty();
                    $('select.image-select').append('<option value="0"> Seleccionar Imagen </option>');
                    $.each(data,function(index,value){
                        $('select.image-select').append(value);
                        console.log(value);
                        var img_galeria = "";
                        img_galeria += '<div class="col-md-55">';
                        img_galeria += '<div class="thumbnail form-control">';
                        img_galeria += '<div class="image view view-first">';
                        img_galeria += '<img src="../../img/ps-img/20160801_115852.jpg" alt="image" class="img-responsive center-block" />';
                        img_galeria += '<div class="mask">';
                        img_galeria += '<p>Your Text</p>';
                        img_galeria += '<div class="tools tools-bottom">';
                        img_galeria += '<a class="check_img"><i class="fa fa-check"></i></a>';
                        img_galeria += '<a href="#"><i class="fa fa-pencil"></i></a>';
                        img_galeria += '<a href="#"><i class="fa fa-times"></i></a>';
                        img_galeria += '</div>';
                        img_galeria += '</div>';
                        img_galeria += '</div>';
                        img_galeria += '<div class="caption text-center">';
                        img_galeria += '<p>Nombre Imagen</p>';
                        img_galeria += '</div>';
                        img_galeria += '</div>';
                        img_galeria += '</div>';
                    });
                },'json').error(function(e){
                alert('Se ha producido un error al cargar, refresque la página para volver a intentarlo');
            });
        },
        error: function(file, serverFileName){
            var name = file.name;
            $.ajax({
                type: "POST",
                url: "../controllers/upload-images.php?delete=true&dir="+url,
                data: "filename="+name,
                success: function(data){
                    var json = JSON.parse(data);
                    if(json.res == true){
                        var element;
                        (element = file.previewElement) != null ? 
                        element.parentNode.removeChild(file.previewElement) :
                        false;
                    }
                }
            });
        },
        removedfile: function(file, serverFileName){
            var name = file.name;
            $.ajax({
                type: "POST",
                url: "../controllers/upload-images.php?delete=true&dir="+url,
                data: "filename="+name,
                success: function(data){
                    var json = JSON.parse(data);
                    if(json.res == true){
                        var element;
                        (element = file.previewElement) != null ? 
                        element.parentNode.removeChild(file.previewElement) : 
                        false;
                    }
                    $.post('../controllers/listar_archivos.php', {dir:url},function(data){
                        $('select.image-select').empty();
                        $('select.image-select').append('<option value="0"> Seleccionar Imagen </option>');
                    }).done(function(data){
                        var count = Object.keys(data).length;
                        if (count==0){
                            thisDropzone.removeAllFiles();
                        }
                    });
                }
            });
        }
    });
}