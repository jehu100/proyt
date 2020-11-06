<?php
require_once 'conexion.modelo.php';
class ConductorModelo{
    
    public function LisConductorModelo()
    {
        $stmt = Conexion::Conectar()->prepare("SELECT conductor.ci,lugar.Departamento,conductor.nom,conductor.ape_pater,conductor.ape_mater,conductor.dir,conductor.tel,tiposangre.Tipo,niveldepropiedad.nivel,conductor.fingreso,conductor.CFoto FROM conductor INNER JOIN lugar ON lugar.idlugar=conductor.idlugar INNER JOIN tiposangre ON tiposangre.idSangre=conductor.idSangre INNER JOIN niveldepropiedad ON niveldepropiedad.idpropiedad=conductor.idpropiedad");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }



    public function InsertarConductorModelo($DatosModelo){
        $stmt = Conexion::Conectar()->prepare("INSERT INTO conductor (ci, idlugar, nom, ape_pater, ape_mater, dir, tel, idSangre, idpropiedad, fingreso, CFoto) VALUES (:ci, :idlugar, :nom, :ape_pater, :ape_mater, :dir, :tel, :idSangre, :idpropiedad, :fingreso, :CFoto)");
        $stmt -> bindParam(':ci', $DatosModelo['ci'], PDO::PARAM_STR);
        $stmt -> bindParam(':idlugar', $DatosModelo['idlugar'], PDO::PARAM_STR);
        $stmt -> bindParam(':nom', $DatosModelo['nom'], PDO::PARAM_STR);
        $stmt -> bindParam(':ape_pater', $DatosModelo['ape_pater'], PDO::PARAM_STR);
        $stmt -> bindParam(':ape_mater', $DatosModelo['ape_mater'], PDO::PARAM_STR);
        $stmt -> bindParam(':dir', $DatosModelo['dir'], PDO::PARAM_STR);
        $stmt -> bindParam(':tel', $DatosModelo['tel'], PDO::PARAM_STR);
        $stmt -> bindParam(':idSangre', $DatosModelo['idSangre'], PDO::PARAM_STR);
        $stmt -> bindParam(':idpropiedad', $DatosModelo['idpropiedad'], PDO::PARAM_STR);
        $stmt -> bindParam(':fingreso', $DatosModelo['fingreso'], PDO::PARAM_STR);
        $stmt -> bindParam(':CFoto', $DatosModelo['CFoto'], PDO::PARAM_STR);

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
    public function ValidarConductorModelo($ci)
    {
        $stmt = Conexion::Conectar()->prepare("SELECT * FROM conductor  WHERE ci = '$ci'");
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;
    }
    public function ListaNoAsigandosModelo()
    {
        $stmt = Conexion::Conectar()->prepare("SELECT * FROM conductor WHERE CAsignado = 0");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }
}