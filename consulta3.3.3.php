<?php
class Datos
{
	private $Codigo_Convocatoria;
	private $Entidad;
	private $EntidadDistrito;


	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}