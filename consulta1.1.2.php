<?php
class Datos
{
	private $Codigo_Convocatoria;
	private $Fecha_Convocatoria;
	private $Descripcion_Proceso;
	private $Objeto_Contractual;
	private $Proceso;
	private $Tipo_Proceso;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}