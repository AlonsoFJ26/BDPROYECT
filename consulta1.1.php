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

			$stm = $this->pdo->prepare("SELECT Fecha_Convocatoria, Descripcion_Proceso, Objeto_Contractual
										from convoca
										where Objeto_Contractual LIKE 'B%'");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$vo = new Datos();
				$vo->__SET('Fecha_Convocatoria',$r->Fecha_Convocatoria);
                $vo->__SET('Descripcion_Proceso',$r->Descripcion_Proceso);
				$vo->__SET('Objeto_Contractual',$r->Objeto_Contractual);
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