<?php
    require_once 'conexion.modelo.php';
    class UsuarioModelos
    {
        public function ListaUsuariosModelo()
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM personal p INNER JOIN usuario u ON p.IdPersonal = u.IdPersonal");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt -> close();
            $stmt = null;
        }


        public function InsertarUsuarioModelo($DatosModelo)
        {
            $stmt = Conexion::Conectar()->prepare("INSERT INTO usuario(codPersonal, usuario, contraseña, estado, nivel) VALUES (:codPersonal, :usuario, :contrasea, :estado, :nivel)");

            $stmt -> bindParam(":codPersonal", $DatosModelo['codPersonal'], PDO::PARAM_INT);
            $stmt -> bindParam(":usuario", $DatosModelo['usuario'], PDO::PARAM_STR);
            $stmt -> bindParam(":contrasea", $DatosModelo['contrasea'], PDO::PARAM_STR);
            $stmt -> bindParam(":estado", $DatosModelo['estado'], PDO::PARAM_STR);
            $stmt -> bindParam(":nivel", $DatosModelo['nivel'], PDO::PARAM_STR);

            if ($stmt -> execute())
            {
                return 'exitoso';
            }
            else 
            {
                return 'error';
            }
        }

        public function EliminarLogicaUsuarioModelo($DatosLogica,$id)
        {
            $stmt = Conexion::Conectar()->prepare("UPDATE usuario SET estado = :estado WHERE codPersonal = $codPersonal)");

            $stmt -> bindParam(":estado", $DatosLogica['estado'], PDO::PARAM_STR);

            if ($stmt -> execute())
            {
                return 'exitoso';
            }
            else 
            {
                return 'error';
            }
        }
        public function ActualizarUsuarioModelo($DatosActualizar,$codPersonal)
        {
            $stmt = Conexion::Conectar()->prepare("UPDATE usuario SET usuario = :usuario WHERE codPersonal = $codPersonal ");

            $stmt -> bindParam(":usuario", $DatosActualizar['usuario'], PDO::PARAM_STR);

            if ($stmt -> execute())
            {
                return 'exitoso';
            }
            else 
            {
                return 'error';
            }
        }

        public function CambiarUsuarioModelo($DatosCambiar,$codPersonal)
        {
            $stmt = Conexion::Conectar()->prepare("UPDATE usuario SET usuario = :usuario, contraseña = :contrasea WHERE codPersonal = $codPersonal ");

            $stmt -> bindParam(":usuario", $DatosCambiar['usuario'], PDO::PARAM_STR);
            $stmt -> bindParam(":contrasea", $DatosCambiar['contrasea'], PDO::PARAM_STR);

            if ($stmt -> execute())
            {
                return 'exitoso';
            }
            else 
            {
                return 'error';
            }
        }
        public function ValidarContraModelo($codPersonal)
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM usuario  WHERE codPersonal = '$codPersonal'");
            $stmt -> execute();
            return $stmt -> fetch();
            $stmt -> close();
            $stmt = null;
        }
    }