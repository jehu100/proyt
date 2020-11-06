<?php
    require_once 'conexion.modelo.php';
    class CargoModelos
    {
        public function ListaCargosModelo()
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM cargo WHERE estadoCargo = 1");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt -> close();
            $stmt = null;
        }
        public function InsertarCargosModelo($Tabla, $DatosModelo)
        {
            $stmt = Conexion::Conectar()->prepare("INSERT INTO $Tabla (`codCargo`, `descripcionCargo`,`estadoCargo`) VALUES  (:codCargo,:descripcionCargo,1)");

            $stmt -> bindParam("codCargo", $DatosModelo['codCargo'], PDO::PARAM_STR);
            $stmt -> bindParam("descripcionCargo", $DatosModelo['descripcionCargo'], PDO::PARAM_STR);
            if ($stmt -> execute())
            {
                return 'exitoso';
            }
            else 
            {
                return 'error';
            }
        }

        public function ValidarCargoModelo($id)
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM cargo  WHERE descripcionCargo = '$id'");
            $stmt -> execute();
            return $stmt -> fetch();
            $stmt -> close();
            $stmt = null;
        }

        public function TraerCargoModelo($IdCargo)
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM cargo WHERE codCargo = $IdCargo");
            $stmt -> execute();
             return $stmt -> fetch();
            $stmt -> close();
            $stmt = null;
        }
    }