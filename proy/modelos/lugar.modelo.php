<?php
require_once 'conexion.modelo.php';
class LugarModelos
{
	public function ListaLugarModelo()
	{
		$stmt = Conexion::Conectar()->prepare("Select * From lugar");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
	}
}