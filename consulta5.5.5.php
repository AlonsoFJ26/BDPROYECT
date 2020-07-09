<?php
class Datos
{
	private $Num_Item;
	private $Item_Departamento;
	private $Estado_Item;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}