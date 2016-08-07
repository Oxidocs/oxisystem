<?php

require_once("crud.php");

/**
* 
*/
class SliderHome
{
	private $ESTADOS_ID;
	private $PATH;
	private $TITULO;
	private $DESCRIPCION;

	
	public function getSliderHome($k)
	{ 
		return $this->$k; 
	}

	public function setSliderHome($k, $v)
	{ 
		return $this->$k = $v; 
	}
}

?>