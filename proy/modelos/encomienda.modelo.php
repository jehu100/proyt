<?php
require_once "conexion.modelo.php";
class encomiendalmodelos{
    public function insertarencomiendamodelo($DatosModelo){
        $stmt = conexion::conectar()->prepare("INSERT INTO encomienda (Rci, Eci, Enombre, Eapallido_Pa, Eapellido_Ma, Ecelular, idDestinoLlegada, Edescripcion, EmontoCancelado, Efecha) VALUES (:Rci, :Eci, :Enombre, :Eapallido_Pa, :Eapellido_Ma, :Ecelular, :idDestinoLlegada, :Edescripcion, :EmontoCancelado, :Efecha)");
        $stmt -> bindParam(':Rci', $DatosModelo['Rci'], PDO::PARAM_STR);
        $stmt -> bindParam(':Eci', $DatosModelo['Eci'], PDO::PARAM_STR);
        $stmt -> bindParam(':Enombre', $DatosModelo['Enombre'], PDO::PARAM_STR);
        $stmt -> bindParam(':Eapallido_Pa', $DatosModelo['Eapallido_Pa'], PDO::PARAM_STR);
        $stmt -> bindParam(':Eapellido_Ma', $DatosModelo['Eapellido_Ma'], PDO::PARAM_STR);
        $stmt -> bindParam(':Ecelular', $DatosModelo['Ecelular'], PDO::PARAM_STR);
        $stmt -> bindParam(':idDestinoLlegada', $DatosModelo['idDestinoLlegada'], PDO::PARAM_STR);
        $stmt -> bindParam(':Edescripcion', $DatosModelo['Edescripcion'], PDO::PARAM_STR);
        $stmt -> bindParam(':EmontoCancelado', $DatosModelo['EmontoCancelado'], PDO::PARAM_STR);
        $stmt -> bindParam(':Efecha', $DatosModelo['Efecha'], PDO::PARAM_STR);

        return ($stmt -> execute()) ? 'success' : 'error';
    }


    public function listaremitentemodelo(){

        $stmt = Conexion::Conectar()->prepare("SELECT * FROM clienteremitente");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }
    public function listadestinomodelo(){

        $stmt = Conexion::Conectar()->prepare("SELECT * FROM destinodellegada");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;

    }

    public function ValidarEncomiendateModelo($idEncomienda)
    {
        $stmt = Conexion::Conectar()->prepare("SELECT * FROM encomienda  WHERE idEncomienda = '$idEncomienda'");
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;
    }


}

