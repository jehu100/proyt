<?php 
require_once 'conexion.modelo.php';
class AsignarViajeModelos{

public function InsertarAsignaciondeViajeModelo($DatosModelo){

    $stmt = Conexion::Conectar()->prepare("INSERT INTO asignarviaje (idAsignacion, IdDestinoPartida, idDestinoLlegada, idHora, fechaasign) VALUES(:idAsignacion, :IdDestinoPartida, :idDestinoLlegada, :idHora, :fechaasign)");
    $stmt -> bindParam(':idAsignacion', $DatosModelo['idAsignacion'], PDO::PARAM_STR);
    $stmt -> bindParam(':IdDestinoPartida', $DatosModelo['IdDestinoPartida'], PDO::PARAM_STR);
    $stmt -> bindParam(':idDestinoLlegada', $DatosModelo['idDestinoLlegada'], PDO::PARAM_STR);
    $stmt -> bindParam(':idHora', $DatosModelo['idHora'], PDO::PARAM_STR);
    $stmt -> bindParam(':fechaasign', $DatosModelo['fechaasign'], PDO::PARAM_STR);

    return ($stmt -> execute()) ? 'success' : 'error';

}
public function ListaAsiganciondeBusModelo(){

    //$stmt = Conexion::Conectar()->prepare("SELECT asignarbus.idAsignacion,conductor.ci FROM asignarbus INNER JOIN conductor ON asignarbus.idConductor=conductor.idConductor");
    $stmt = Conexion::Conectar()->prepare("SELECT asignarbus.idAsignacion,conductor.ci,conductor.nom,conductor.ape_pater,bus.placa FROM asignarbus INNER JOIN conductor ON asignarbus.idConductor=conductor.idConductor INNER JOIN bus ON asignarbus.idBus=bus.idBus");
    $stmt -> execute();
    return $stmt -> fetchAll();
    $stmt -> close();
    $stmt = null;

}

public function ListaLugarPartidaModelo(){

    $stmt = Conexion::Conectar()->prepare("SELECT * FROM destinodepartida");
    $stmt -> execute();
    return $stmt -> fetchAll();
    $stmt -> close();
    $stmt = null;
}

public function ListaLugarDestinoModelo(){

    $stmt = Conexion::Conectar()->prepare("SELECT * FROM destinodellegada");
    $stmt -> execute();
    return $stmt -> fetchAll();
    $stmt -> close();
    $stmt = null;
}

public function ListaHoraModelo(){

    $stmt = Conexion::Conectar()->prepare("SELECT * FROM horasalidas");
    $stmt -> execute();
    return $stmt -> fetchAll();
    $stmt -> close();
    $stmt = null;
}

public function ValidarAsignacionViajenModelo($idAsignacion)
{
    $stmt = Conexion::Conectar()->prepare("SELECT * FROM asignarviaje  WHERE idAsignacion = '$idAsignacion'");
    $stmt -> execute();
    return $stmt -> fetch();
    $stmt -> close();
    $stmt = null;
}

}

//SELECT asignarbus.idAsignacion,conductor.ci,bus.placa FROM asignarbus INNER JOIN conductor ON asignarbus.idConductor=conductor.idConductor INNER JOIN bus ON asignarbus.idBus=bus.idBus






