<?php
class Consulta
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost:3306;dbname=proyecto', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT Ruc_Proveedor, Tipo_Proveedor,Entidad
                                        FROM proveedores NATURAL JOIN entidad
                                        WHERE Tipo_Proveedor LIKE'Persona Natural'");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$vo = new Datos();
				$vo->__SET('Ruc_Proveedor',$r->Ruc_Proveedor);
                $vo->__SET('Tipo_Proveedor',$r->Tipo_Proveedor);
                $vo->__SET('Entidad',$r->Entidad);
				$result[] = $vo;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}