<?php
class Datos
{
    private $Ruc_Proveedor;
    private $Proveedor;
	private $Monto;
	private $Rubros;


	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}