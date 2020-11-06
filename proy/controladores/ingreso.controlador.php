<?php
    class IngresoControladores
    {
        public function ValidarIngresoControlador()
        {
            if (isset($_POST["IUsuario"]))
            {
                $User = $_POST["IUsuario"];
                $Password = $_POST["IPassword"];

                $encriptar = crypt($Password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $TraerUsuario = IngresoModelos::ValidarIngresoModelo($User);
                
                if ($TraerUsuario["usuario"] == $User && $TraerUsuario["contraseña"] == $encriptar && $TraerUsuario["estado"] == 1)
                {
                    session_start();
                    $_SESSION["Validar"] = true;
                    $_SESSION["nivel"] = $TraerUsuario["nivel"];
                     // Aplicar Variables de Session con los datos del usuario y personal
                    $_SESSION["codPersonal"] = $TraerUsuario["codPersonal"];
                    $_SESSION["nombre"] = $TraerUsuario["nombre"];
                    $_SESSION["apellidoPaterno"] = $TraerUsuario["apellidoPaterno"];
                    $_SESSION["apellidoMaterno"] = $TraerUsuario["apellidoMaterno"];
                    $_SESSION["ci"] = $TraerUsuario["ci"];
                    $_SESSION["direccion"] = $TraerUsuario["direccion"];
                    $_SESSION["telefono"] = $TraerUsuario["telefono"];
                    $_SESSION["estado"] = $TraerUsuario["estado"];
                    $_SESSION["usuario"] = $TraerUsuario["usuario"];
                    $_SESSION["contraseña"] = $TraerUsuario["contraseña"];
                    $_SESSION["codCargo"] = $TraerUsuario["codCargo"];
                    $_SESSION["fechaIngreso"] = $TraerUsuario["fechaIngreso"];
                    header('Location: panel');
                }
                else 
                {
                    echo '
                    <div class="alert round bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                    <span class="alert-icon">
                    <i class="fas fa-thumbs-down"></i>  
                    </span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Usuario o contraseña incorrectos</strong>
                </div>
                    ';
                }
            }
        }
    }