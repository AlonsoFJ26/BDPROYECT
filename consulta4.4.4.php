<?php
class Datos
{
	private $RucEntidad;
	private $Entidad;
	private $EntidadDepartamento;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}