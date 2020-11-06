<?php
require_once 'conexion.modelo.php';
class AyudanteModelos{

    public function InsertarAyudanteModelo($DatosModelo){

        $stmt = Conexion::Conectar()->prepare("INSERT INTO ayudante (Aci, idlugar, Anombre, Aape_pater, Aape_mater, Aedad, Adireccion, Acelular, idSangre, fecha) VALUES(:Aci, :idlugar, :Anombre, :Aape_pater, :Aape_mater, :Aedad, :Adireccion, :Acelular, :idSangre, :fecha)");
        $stmt -> bindParam(':Aci', $DatosModelo['Aci'], PDO::PARAM_STR);
        $stmt -> bindParam(':idlugar', $DatosModelo['idlugar'], PDO::PARAM_STR);
        $stmt -> bindParam(':Anombre', $DatosModelo['Anombre'], PDO::PARAM_STR);
        $stmt -> bindParam(':Aape_pater', $DatosModelo['Aape_pater'], PDO::PARAM_STR);
        $stmt -> bindParam(':Aape_mater', $DatosModelo['Aape_mater'], PDO::PARAM_STR);
        $stmt -> bindParam(':Aedad', $DatosModelo['Aedad'], PDO::PARAM_STR);
        $stmt -> bindParam(':Adireccion', $DatosModelo['Adireccion'], PDO::PARAM_STR);
        $stmt -> bindParam(':Acelular', $DatosModelo['Acelular'], PDO::PARAM_STR);
        $stmt -> bindParam(':idSangre', $DatosModelo['idSangre'], PDO::PARAM_STR);
        $stmt -> bindParam(':fecha', $DatosModelo['fecha'], PDO::PARAM_STR);

        return ($stmt -> execute()) ? 'success' : 'error';
    }

    
    public function ListaSangreModelo(){

        $stmt = Conexion::Conectar()->prepare("SELECT * FROM tiposangre");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }

    public function ListaLugarModelo(){

        $stmt = Conexion::Conectar()->prepare("SELECT * FROM lugar");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }
    public function ValidarAyudanteModelo($Aci)
    {
        $stmt = Conexion::Conectar()->prepare("SELECT * FROM ayudante  WHERE Aci = '$Aci'");
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;
    }

    public function ListaAyudanteNoAsigandosModelo()
    {
        $stmt = Conexion::Conectar()->prepare("SELECT * FROM ayudante WHERE AAsignado = 0");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }




}