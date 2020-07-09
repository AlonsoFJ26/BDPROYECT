<?php
class Datos
{
	private $RucEntidad;
	private $Entidad;
	private $EntidadDepartamento;
	private $EntidadProvincia;
	private $EntidadDistrito;
    private $TipoEntidad;
    private $Sector;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}