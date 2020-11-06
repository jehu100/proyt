<?php
require_once 'conexion.modelo.php';
class AsignarBusModelos{

    public function ListaBusesAsigandosModelo()
    {
        $stmt = Conexion::Conectar()->prepare("SELECT conductor.nom,conductor.ape_pater,conductor.ape_mater,conductor.ci,ayudante.Anombre,ayudante.Aape_pater,ayudante.Aape_mater,ayudante.Aci,bus.placa,bus.marca FROM conductor INNER JOIN asignarbus ON asignarbus.idConductor=conductor.idConductor INNER JOIN ayudante ON ayudante.idAyudante=asignarbus.idAyudante INNER JOIN bus ON bus.idBus=asignarbus.idBus");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }


    public function InsertarAsignacionBusModelo($DatosModelo){
//$stmt = Conexion::Conectar()->prepare("INSERT INTO ayudante (Aci, idlugar, Anombre, Aape_pater, Aape_mater, Aedad, Alicencia, Adireccion, Acelular, idSangre, fecha) VALUES(:Aci, :idlugar, :Anombre, :Aape_pater, :Aape_mater, :Aedad, :Alicencia, :Adireccion, :Acelular, :idSangre, :fecha)");

        $stmt = Conexion::Conectar()->prepare("INSERT INTO asignarbus (idConductor, idAyudante, idBus, fechaAsignacion) VALUES(:idConductor, :idAyudante, :idBus, :fechaAsignacion)");
        $stmt -> bindParam(':idConductor', $DatosModelo['idConductor'], PDO::PARAM_STR);
        $stmt -> bindParam(':idAyudante', $DatosModelo['idAyudante'], PDO::PARAM_STR);
        $stmt -> bindParam(':idBus', $DatosModelo['idBus'], PDO::PARAM_STR);
        $stmt -> bindParam(':fechaAsignacion', $DatosModelo['fechaAsignacion'], PDO::PARAM_STR);

        return ($stmt -> execute()) ? 'success' : 'error';
    }

     
    public function ListaConductorModelo(){

        $stmt = Conexion::Conectar()->prepare("SELECT * FROM conductor WHERE CAsignado = 0");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }

    public function ListaAyudanteModelo(){

        $stmt = Conexion::Conectar()->prepare("SELECT * FROM ayudante WHERE AAsignado = 0");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }

    public function ListBusModelo(){

        $stmt = Conexion::Conectar()->prepare("SELECT * FROM bus");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }

    public function ValidarAsignacionModelo($AidConductor)
    {
        $stmt = Conexion::Conectar()->prepare("SELECT * FROM asignarbus  WHERE idConductor = '$idConductor'");
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;
    }

   
}