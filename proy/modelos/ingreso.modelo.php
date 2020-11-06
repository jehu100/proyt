<?php
    require_once 'conexion.modelo.php';
    class IngresoModelos
    {
        public function ValidarIngresoModelo($usuario)
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM personal p INNER JOIN usuario u ON p.codPersonal = u.codPersonal  WHERE u.usuario = '$usuario'");
            $stmt -> execute();
            return $stmt -> fetch();
            $stmt -> close();
        } 
    } 