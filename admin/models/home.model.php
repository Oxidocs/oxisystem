<?php 
require_once("crud.php");
class SliderModel
{
    

    
    public function Listar()
    {	
    	$result = array();
        try
        {
            $model = new Crud();
			$model->select='*';
    		$model->from = 'slide_portada.v';
    		$model->Read();
	 		$fila = $model->rows; 
	 		//$total = count($filas);
			

            foreach($fila as $filas)
            {
                $slider = new SliderHome();

                $slider->__SET('ESTADOS_ID', $r->id);
                $slider->__SET('PATH', $r->Nombre);
                $slider->__SET('TITULO', $r->Apellido);
                $slider->__SET('DESCRIPCION', $r->Sexo);
                

                $result[] = $slider;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try 
        {
            $model = new Crud();
			$model->select='';
    		$model->from = '';
    		$model->Read();
	 		$fila = $model->rows; 

            $sliderhome = new SliderHome();

            $sliderhome->__SET('id', $fila->id);
            $sliderhome->__SET('Nombre', $fila->Nombre);
            $sliderhome->__SET('Apellido', $fila->Apellido);
            $sliderhome->__SET('Sexo', $fila->Sexo);
            $sliderhome->__SET('FechaNacimiento', $fila->FechaNacimiento);

            return $sliderhome;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try 
        {
            $model = new Crud();
			$model->deletefrom='';
			$model->condition="id_slider = $id";
			$model->Delete();
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(SliderHome $data)
    {
        try 
        {
            $sql = "UPDATE alumnos SET 
                        Nombre          = ?, 
                        Apellido        = ?,
                        Sexo            = ?, 
                        FechaNacimiento = ?
                    WHERE id = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    $data->__GET(''), 
                    $data->__GET(''), 
                    $data->__GET(''),
                    $data->__GET(''),
                    $data->__GET('')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(SliderHome $data)
    {
        try 
        {
            $model = new Crud();
            $model->insertInto = 'path_imagenes';
            $model->insertColumns = '';
            $model->insertValues = "$data->__GET('ESTADOS_ID')";
            $model->Create();
            $idfk_instructor = $model->id;

        
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
    ?>