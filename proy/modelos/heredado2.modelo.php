<?php
    require_once 'conexion.modelo.php';
    class HeredadoModelos2
    {
        public function UltimoIdModelo($item, $tabla)
        {
            $stmt = Conexion::Conectar()->prepare("SELECT MAX($item) AS UltimoId FROM $tabla");
            $stmt -> setFetchMode(PDO::FETCH_ASSOC);
            $stmt -> execute();
            while ($row = $stmt -> fetch())
            {
                return $UltimoId = $row['UltimoId'];
            }
        }

        public function UltimoIdConductorModelo($item, $tabla)
        {
            $stmt = Conexion::Conectar()->prepare("SELECT MAX($item) AS UltimoId FROM $tabla");
            $stmt -> setFetchMode(PDO::FETCH_ASSOC);
            $stmt -> execute();
            while ($row = $stmt -> fetch())
            {
                return $UltimoId = $row['UltimoId'];
            }
        }

    }