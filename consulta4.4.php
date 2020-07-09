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

			$stm = $this->pdo->prepare("SELECT RucEntidad, Entidad, EntidadDepartamento
                                        FROM entidad 
                                        WHERE RucEntidad < 6");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$vo = new Datos();
				$vo->__SET('RucEntidad',$r->RucEntidad);
                $vo->__SET('Entidad',$r->Entidad);
				$vo->__SET('EntidadDepartamento',$r->EntidadDepartamento);
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