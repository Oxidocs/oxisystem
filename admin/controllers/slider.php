<?php 
require_once '../models/home.php';
require_once '../models/home.model.php';

// Logica
$SliderHome = new SliderHome();
$SliderModel = new SliderModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'listar':
            
             $sliders = $SliderModel->Listar();
            //print_r($arr[1]->ESTADOS_ID);
             $result = array();
             foreach ($sliders as $slider) {
                 # code...
                $result = array(
                "ID"=>$slider->ID,
                "ESTADOS_ID"=>$slider->ESTADOS_ID,
                "PATH"=>$slider->PATH,
                "TITULO"=>$slider->TITULO,
                "DESCRIPCION"=>$slider->DESCRIPCION
                           );
                echo json_encode(($result));
             }           
            break;

        case 'actualizar':
            $SliderHome->setSliderHome('ID',              $_REQUEST['ID_PATH']);
            $SliderHome->setSliderHome('ESTADOS_ID',          $_REQUEST['ESTADOS_ID']);
            $SliderHome->setSliderHome('PATH',        $_REQUEST['PATH']);
            $SliderHome->setSliderHome('TITULO',            $_REQUEST['TITULO']);
            $SliderHome->setSliderHome('DESCRIPCION', $_REQUEST['DESCRIPCION']);

            $SliderModel->Actualizar($SliderHome);
            //header('Location: portada.php');
            break;

        case 'registrar':
           
            $SliderHome->setSliderHome('ESTADOS_ID',          $_REQUEST['ESTADOS_ID']);
            $SliderHome->setSliderHome('PATH',        $_REQUEST['PATH']);
            $SliderHome->setSliderHome('TITULO',            $_REQUEST['TITULO']);
            $SliderHome->setSliderHome('DESCRIPCION', $_REQUEST['DESCRIPCION']);

            $id = $SliderModel->Registrar($SliderHome);
            $SliderModel->insertar_contenido_path(1,$id);
           // header('Location: index.php');
            break;

        case 'eliminar':
        if ( $SliderModel->Eliminar($_REQUEST['ID_PATH']) =="Registro eliminado con exito") {
            # code...
            
            $SliderModel->eliminar_contenido_path($_REQUEST['ID_PATH']);
        }
            
           
            break;

        
    }
}
?>