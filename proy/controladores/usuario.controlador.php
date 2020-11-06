<?php
    class UsuarioControladores
    {
        public function ListaUsuariosControlador()
        {
            $ListaUsuarios = UsuarioModelos::ListaUsuariosModelo();
                // PREFORMATEAR CODIGO - VARDUMP
                /*echo '<pre>';
                    var_dump($ListaUsuarios);
                echo '</pre>';*/
            foreach ($ListaUsuarios as $key => $Usuario) 
            {
                $i++;
                $Sexo = ($Usuario['Sexo'] == 'M') ? 'Masculino' : 'Femenino';
                $Cargo = ($Usuario['Cargo'] == 'A') ? 'Administrador' : 'Vendedor';
                echo '<tr>
                    <td>'.$i.'</td>
                    <td>
                        <span class="avatar avatar-online">
                            <img height="100" src="'.$Usuario["Foto"].'" alt="User">
                        </span>
                    </td>
                    <td>'.$Usuario["CedulaIdentidad"].'</td>
                    <td>'.$Usuario['ApellidoPaterno'].' '.$Usuario["ApellidoMaterno"].' '.$Usuario["Nombres"].'</td>
                    <td>'.$Usuario['Direccion'].'</td>
                    <td>'.$Usuario['Celular'].' - '.$Usuario["Telefono"].'</td>
                    <td>'.$Usuario['Correo'].'</td>
                    <td>'.$Sexo.'</td>
                    <td>'.$Cargo.'</td>
                    <td>'.$Usuario['FechaIngreso'].'</td>
                    <td>'.$Usuario['Estado'].'</td>
                    <td>Acciones</td>
                </tr>';
            }
        }

        public function CambiarUsuarioControlador()
        {
            if (isset($_POST["UUsuario"]))
            {
                $Codigo = $_POST["codPersonal"];
                $User = $_POST["UUsuario"];
                $Password = $_POST["UContra"];
                $NuevaContra = $_POST["UNuevaContra"];
                $Confirmar = $_POST["UConfirmarContra"];

                $encriptar = crypt($Password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $TraerUsuario = UsuarioModelos::ValidarContraModelo($Codigo);
                
                if ($TraerUsuario["contraseña"] == $encriptar && $TraerUsuario["estado"] == 1)
                {
                    if ( $NuevaContra == $Confirmar )
                    {
                      
                        $encriptarNuevo = crypt($_POST['UConfirmarContra'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                        $DatosCambiar = array(
                        "usuario" => strtoupper($_POST['UUsuario']),
                        "contrasea" => $encriptarNuevo
                        );
                        $CambiarUsuario = UsuarioModelos::CambiarUsuarioModelo($DatosCambiar,$Codigo);

                        if ($CambiarUsuario == 'exitoso') 
                        {
                            echo'
                              <script src="vistas/recursos/js/sweetalert.min.js"></script>
                            <script type="text/javascript">
                            swal({
                                        title: "¡Exitoso!",
                                        text: "¡El usuario ha sido registrado correctamente!",
                                        type: "success",
                                        icon:  "success",
                                        confirmButtonText: "Cerrar",
                                        closeOnConfirm: false
                                    }
                                ).then(function () {
                                    location.href="ingreso";
                            });
                            </script>';
                               
                        }
                        else
                        {
                            echo '<script src="vistas/recursos/js/sweetalert.min.js"></script>
                            <script type="text/javascript">
                            swal({
                                        title: "¡Error!",
                                        text: "¡Al go esta fallando!",
                                        type: "danger",
                                        icon:  "warning",
                                        confirmButtonText: "Cerrar",
                                        closeOnConfirm: false
                            });
                            </script>';
                        }
                    }
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

        public function OlvidarUsuarioControlador()
        {
            if (isset($_POST["OlUsuario"]))
            {
                $User = $_POST["OlUsuario"];
                $FechaIngreso = $_POST["OlFecha"];
                $Celular = $_POST["OlTelefono"];

                $TraerUsuario = IngresoModelos::ValidarIngresoModelo($User);
           
                if ($TraerUsuario["usuario"] == $User && $TraerUsuario["fechaIngreso"] == $FechaIngreso && $TraerUsuario["estado"] == 1 && $TraerUsuario["celular"] == $Celular)
                {
                        $encriptar = crypt($_POST['OlContra'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                        $tabla = "usuario";
                        $Item = "contraseña";
                        $ItemValor = $encriptar;
                        $ItemId = "usuario";
                        $IdValor = $_POST["OlUsuario"];

                        $CambiarUsuario = HeredadoModelos::ActualizarDatoModelo($tabla, $Item, $ItemValor, $ItemId, $IdValor);

                        if ($CambiarUsuario == 'update') 
                        {
                            echo'
                              <script src="vistas/recursos/js/sweetalert.min.js"></script>
                            <script type="text/javascript">
                            swal({
                                        title: "¡Exitoso!",
                                        text: "¡Se recupero la cuenta correctamente!",
                                        type: "success",
                                        icon:  "success",
                                        confirmButtonText: "Cerrar",
                                        closeOnConfirm: false
                                    }
                                ).then(function () {
                                    location.href="ingreso";
                            });
                            </script>';
                               
                        }
                        else
                        {
                            echo '<script src="vistas/recursos/js/sweetalert.min.js"></script>
                            <script type="text/javascript">
                            swal({
                                        title: "¡Error!",
                                        text: "¡Al go esta fallando!",
                                        type: "danger",
                                        icon:  "warning",
                                        confirmButtonText: "Cerrar",
                                        closeOnConfirm: false
                            });
                            </script>';
                        }
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