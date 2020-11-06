
 <?php
    require_once 'conexion.modelo.php';
    class PersonalModelos
    {
        public function ListaPersonalesModelo()
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM personal p INNER JOIN usuario u ON p.codPersonal = u.codPersonal INNER JOIN cargo c on p.codCargo = c.codCargo WHERE u.estado=1");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt -> close();
            $stmt = null;
        }
        public function InsertarPersonalModelo($Tabla, $DatosModelo)
        {
            $stmt = Conexion::Conectar()->prepare("INSERT INTO $Tabla (codPersonal, ci, nombre, apellidoPaterno, apellidoMaterno, codCargo, direccion, telefono, celular, fechaIngreso, expedicion, sexo) 
            VALUES (:codPersonal, :ci, :nombre, :apellidoPaterno, :apellidoMaterno, :codCargo, :direccion, :telefono, :celular, :fechaIngreso, :expedicion, :sexo)");

            $stmt -> bindParam(":codPersonal", $DatosModelo['codPersonal'], PDO::PARAM_INT);
            $stmt -> bindParam(":ci", $DatosModelo['ci'], PDO::PARAM_STR);
            $stmt -> bindParam(":nombre", $DatosModelo['nombre'], PDO::PARAM_STR);
            $stmt -> bindParam(":apellidoPaterno", $DatosModelo['apellidoPaterno'], PDO::PARAM_STR);
            $stmt -> bindParam(":apellidoMaterno", $DatosModelo['apellidoMaterno'], PDO::PARAM_STR);
            $stmt -> bindParam(":codCargo", $DatosModelo['codCargo'], PDO::PARAM_STR);
            $stmt -> bindParam(":direccion", $DatosModelo['direccion'], PDO::PARAM_STR);
            $stmt -> bindParam(":telefono", $DatosModelo['telefono'], PDO::PARAM_STR);
            $stmt -> bindParam(":celular", $DatosModelo['celular'], PDO::PARAM_STR);
            $stmt -> bindParam(":fechaIngreso", $DatosModelo['fechaIngreso'], PDO::PARAM_STR);
            $stmt -> bindParam(":expedicion", $DatosModelo['expedicion'], PDO::PARAM_STR);
            $stmt -> bindParam(":sexo", $DatosModelo['sexo'], PDO::PARAM_STR);

            if ($stmt -> execute())
            {
                return 'exitoso';
            }
            else 
            {
                return 'error';
            }
        }

        public function ActualizarPersonalModelo($TablaAct, $DatosModelo, $id)
        {
            $stmt = Conexion::Conectar()->prepare("UPDATE personal SET nombre = :nombre, apellidoPaterno = :apellidoPaterno, apellidoMaterno = :apellidoMaterno, codCargo = :codCargo, direccion = :direccion, telefono = :telefono, celular = :celular  WHERE codPersonal = $id");

            $stmt -> bindParam(":nombre", $DatosModelo['nombre'], PDO::PARAM_STR);
            $stmt -> bindParam(":apellidoPaterno", $DatosModelo['apellidoPaterno'], PDO::PARAM_STR);
            $stmt -> bindParam(":apellidoMaterno", $DatosModelo['apellidoMaterno'], PDO::PARAM_STR);
            $stmt -> bindParam(":codCargo", $DatosModelo['codCargo'], PDO::PARAM_INT);
            $stmt -> bindParam(":direccion", $DatosModelo['direccion'], PDO::PARAM_STR);
            $stmt -> bindParam(":telefono", $DatosModelo['telefono'], PDO::PARAM_STR);
            $stmt -> bindParam(":celular", $DatosModelo['celular'], PDO::PARAM_STR);

            if ($stmt -> execute())
            {
                return 'exitoso';
            }
            else 
            {
                return 'error';
            }
        }
        public function ValidarPersonalModelo($ci)
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM personal  WHERE ci = '$ci'");
            $stmt -> execute();
            return $stmt -> fetch();
            $stmt -> close();
            $stmt = null;
        }

        public function TraerPersonalModelo($Id)
        {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM personal INNER JOIN cargo ON personal.codCargo= cargo.codCargo WHERE codPersonal = '$Id'");
            $stmt -> execute();
            return $stmt -> fetch();
            $stmt -> close();
            $stmt = null;
        }
    }