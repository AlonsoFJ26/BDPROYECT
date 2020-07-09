<?php
class Datos
{
	private $Ruc_Proveedor;
	private $Monto;
    private $Moneda;
    private $Url;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}