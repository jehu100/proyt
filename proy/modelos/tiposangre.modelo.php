<?php
require_once 'conexion.modelo.php';
class TipodeSangreModelos{

public function InsertarTipoSangreModelo($DatosModelo){

    $stmt = Conexion::Conectar()->prepare("INSERT INTO tiposangre (Tipo) VALUES (:Tipo)");
    $stmt -> bindParam(':Tipo', $DatosModelo['Tipo'], PDO::PARAM_STR);

    return ($stmt -> execute()) ? 'success' : 'error';


}

public function ValidarTipoSangreModelo($Tipo)
{
    $stmt = Conexion::Conectar()->prepare("SELECT * FROM tiposangre  WHERE Tipo = '$Tipo'");
    $stmt -> execute();
    return $stmt -> fetch();
    $stmt -> close();
    $stmt = null;
}


}