<?php
    require_once 'conexion.modelo.php';
    class HeredadoModelos
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
        public function ActualizarDatoModelo($tabla, $Item, $ItemValor, $ItemId, $IdValor)
        {
            $stmt = Conexion::Conectar()->prepare("UPDATE $tabla SET $Item = '$ItemValor' WHERE $ItemId = '$IdValor'");
            if($stmt -> execute())
            {
                return 'update';
            }
            else
            {
                return 'error';
            }
        }

        public function InsertarDatoModelo($Tabla, $ItemId, $ItemDes, $ItemEstado, $IdValor, $DesValor)
        {
            $stmt = Conexion::Conectar()->prepare("INSERT INTO $Tabla ($ItemId, $ItemDes,$ItemEstado) VALUES  ('$IdValor','$DesValor',1)");

            if ($stmt -> execute())
            {
                return 'insertado';
            }
            else 
            {
                return 'error';
            }
        }

        public function SeleccionarItemModelo($Item, $tabla, $IdItem, $IdValor)
        {
            $stmt = Conexion::conectar()->prepare("
            SELECT $Item AS Valor FROM $tabla WHERE $IdItem = '$IdValor'");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt -> execute();        
            while ($row = $stmt->fetch())
            {
                return $Valor = $row['Valor'];
            }
        }
        public function LineChartVentasModel()
        {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM (venta v INNER JOIN detalleventa dv ON v.IdVenta = dv.IdVenta) ORDER BY v.VFecha");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt -> close();
        }

        public function ValidarModelo($tabla,$descripcion,$id)
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM $tabla  WHERE $descripcion = '$id'");
            $stmt -> execute();
            return $stmt -> fetch();
            $stmt -> close();
            $stmt = null;
        }
    }