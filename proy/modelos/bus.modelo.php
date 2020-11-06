<?php
require_once 'conexion.modelo.php';
class BusModelos{


    public function ListaBusModelo()
    {
        $stmt = Conexion::Conectar()->prepare("SELECT bus.idBus,bus.placa,bus.marca,bus.modelo,bus.capacidad,conductor.nom,conductor.ape_pater,conductor.ape_mater,niveldepropiedad.nivel,bus.fecha,bus.Foto,bus.Estado FROM bus INNER JOIN conductor ON bus.idConductor = conductor.idConductor INNER JOIN niveldepropiedad ON conductor.idpropiedad=niveldepropiedad.idpropiedad");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }

    public function InsertarBusModelo($DatosModelo){

        $stmt = Conexion::Conectar()->prepare("INSERT INTO bus (placa, marca, modelo, capacidad, idConductor, fecha, Foto) VALUES (:placa, :marca, :modelo, :capacidad, :idConductor, :fecha, :Foto)");
        $stmt -> bindParam(':placa', $DatosModelo['placa'], PDO::PARAM_STR);
        $stmt -> bindParam(':marca', $DatosModelo['marca'], PDO::PARAM_STR);
        $stmt -> bindParam(':modelo', $DatosModelo['modelo'], PDO::PARAM_STR);
        $stmt -> bindParam(':capacidad', $DatosModelo['capacidad'], PDO::PARAM_STR);
        $stmt -> bindParam(':idConductor', $DatosModelo['idConductor'], PDO::PARAM_STR);
        $stmt -> bindParam(':fecha', $DatosModelo['fecha'], PDO::PARAM_STR);
        $stmt -> bindParam(":Foto", $DatosModelo['Foto'], PDO::PARAM_STR);

        return ($stmt -> execute()) ? 'success' : 'error';

    }

    public function ValidarBusModelo($placa)
    {
        $stmt = Conexion::Conectar()->prepare("SELECT * FROM bus WHERE placa = '$placa'");
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;
    }

    public function ListadePropietarioConductor(){

        $stmt = Conexion::Conectar()->prepare("SELECT * FROM conductor");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }

    public function TraerBusModelo($Id)
    {
        $stmt = Conexion::Conectar()->prepare("SELECT * FROM bus WHERE idBus = '$Id'");
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;
    }


    public function ListaBusNoAsigandosModelo()
    {
        $stmt = Conexion::Conectar()->prepare("SELECT * FROM bus WHERE BAsignado = 0");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }




    public function ActualizarBuslModelo($TablaAct, $DatosModelo, $id)
    {
        $stmt = Conexion::Conectar()->prepare("UPDATE bus SET placa = :placa, marca = :marca, modelo = :modelo, capacidad = :capacidad  WHERE idBus = $id");

        $stmt -> bindParam(":placa", $DatosModelo['placa'], PDO::PARAM_STR);
        $stmt -> bindParam(":marca", $DatosModelo['marca'], PDO::PARAM_STR);
        $stmt -> bindParam(":modelo", $DatosModelo['modelo'], PDO::PARAM_STR);
        $stmt -> bindParam(":capacidad", $DatosModelo['capacidad'], PDO::PARAM_INT);

        if ($stmt -> execute())
        {
            return 'exitoso';
        }
        else 
        {
            return 'error';
        }
    }

}