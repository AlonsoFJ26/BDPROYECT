<?php
class Datos
{
    private $Ruc_Proveedor;
    private $Tipo_Proveedor;
	private $Entidad;


	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}