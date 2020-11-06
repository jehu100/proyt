<?php
require_once 'conexion.modelo.php';
class NivelModelos
{
	public function ListaNivelModelo()
	{
		$stmt = Conexion::Conectar()->prepare("Select * From niveldepropiedad Where idpropiedad = 2 or idpropiedad = 5");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
	}
}