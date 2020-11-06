<?php
    class PersonalControladores
    {
        public function ListaPersonalesControlador()
        {
            $ListaPersonales = PersonalModelos::ListaPersonalesModelo();
             foreach ($ListaPersonales as $key => $Personal) 
            {
                $i++;
                $Sexo = ($Personal['sexo'] == 'M') ? 'MASCULINO' : 'FEMENINO';
                echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$Personal["ci"].' '.$Personal["expedicion"].'</td>
                    <td>'.$Personal['apellidoPaterno'].' '.$Personal["apellidoMaterno"].' '.$Personal["nombre"].'</td>
                    <td>'.$Personal['direccion'].'</td>
                    <td>'.$Personal['celular'].' - '.$Personal["telefono"].'</td>
                    <td>'.$Sexo.'</td>
                    <td>'.$Personal['descripcionCargo'].'</td>
                    <td>'.$Personal['fechaIngreso'].'</td>
                    <td>'.$Personal['estado'].'</td>
                    <td>                      
                        <button id="btnPersonalEditar" IdPersonal="'.$Personal["codPersonal"].'" data-toggle="modal" data-target="#ModalEditarUsuario" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></button>
                        <button id="btnPersonalEliminar" IdPersonal="'.$Personal["codPersonal"].'" data-toggle="modal" data-target="#ModalEliminarPersonal" class="btn btn-outline-dark"><i class="fas fa-trash" ></i></button>
                    </td>
                </tr>';
            }
        }

        public function ValidarPersonalControlador($ci){
            $response = PersonalModelos::ValidarPersonalModelo($ci);
            return $response;
        }

        public function InsertarPersonalControlador()
        {
            if(isset($_POST['UIApellidoPaterno']))
            {
                    // Enviar datos del Personal
                $ci =$_POST["UICI"];

                $TraerCI = PersonalModelos::ValidarPersonalModelo($ci);
                if ($TraerCI["ci"] == $ci )
                {
                    echo'
                          <script src="vistas/recursos/js/sweetalert.min.js"></script>
                        <script type="text/javascript">
                        swal({
                                    title: "¡Error!",
                                    text: "¡El numero de cedula de identidad ya existe!",
                                    type: "danger",
                                    icon:  "warning",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                        });
                        </script>';
                }
                else
                {
                    $item = 'codPersonal';
                    $tabla = 'personal';
                    date_default_timezone_set("America/Caracas");
                    $fechaIngreso=date("Y-m-d");
                    $IdPersonal = HeredadoModelos::UltimoIdModelo($item, $tabla) + 1;
                    $Datos = array(
                        //nombre base de datos              nombre vista
                        "codPersonal" => $IdPersonal,
                        "ci" => strtoupper($_POST['UICI']),
                        "nombre" => strtoupper($_POST['UINombres']),
                        "apellidoPaterno" => strtoupper($_POST['UIApellidoPaterno']),
                        "apellidoMaterno" => strtoupper($_POST['UIApellidoMaterno']),
                        "codCargo" => strtoupper($_POST['UICargo']),
                        "direccion" => strtoupper($_POST['UIDireccion']),
                        "telefono" => strtoupper($_POST['UITelefono']),
                        "celular" => strtoupper($_POST['UICelular']),
                        "fechaIngreso" => $fechaIngreso,
                        "expedicion" => strtoupper($_POST['UIExpedicion']),
                        "sexo" => strtoupper($_POST['UISexo'])
                    );
                    
                    // La contraseña del usuario sera igual a su Cedula de Identidad
                    $encriptar = crypt($_POST['UICI'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                    // Enviar datos del Usuario
                    $TablaUsuario = 'usuario';
                    $estadosingreso ='1';
                    $DatosUsuario = array(
                        "codPersonal" => $IdPersonal,
                        "usuario" => strtoupper($_POST['UIApellidoPaterno']),
                        "contrasea" => $encriptar,
                        "estado" => $estadosingreso,
                        "nivel" => strtoupper($_POST['UICargo'])
                    );
                        
                    $InsertarPersonal = PersonalModelos::InsertarPersonalModelo($tabla, $Datos);

                    $InsertarUsuari = UsuarioModelos::InsertarUsuarioModelo($DatosUsuario);
                    var_dump($InsertarUsuari);
                    if ($InsertarUsuari == 'exitoso' ) 
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
                                location.href="listapersonal";
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
        }
        public function ActualizarPersonalControlador()
        {
            if(isset($_POST['perPaterno']))
            {
                    // Enviar datos del Personal
                    $tabla = 'personal';
                    $id = $_POST['IdPersonal']; 
                    $Datos = array(
                        //nombre base de datos              nombre vista
                        "nombre" => strtoupper($_POST['perNombre']),
                        "apellidoPaterno" => strtoupper($_POST['perPaterno']),
                        "apellidoMaterno" => strtoupper($_POST['perMaterno']),
                        "direccion" => strtoupper($_POST['perDireccion']),
                        "telefono" => strtoupper($_POST['perTele']),
                        "codCargo" => strtoupper($_POST['IdCargo']),
                        "celular" => strtoupper($_POST['perCelular'])
                    );
                    var_dump($Datos);

                    // Enviar datos del Usuario
                    $TablaUsuario = 'usuario';
                    $DatosUsuario = array(
                        "usuario" => strtoupper($_POST['perPaterno'])
                    );
                        
                    $ActualizarPersonal = PersonalModelos::ActualizarPersonalModelo($tabla, $Datos, $id);

                    $ActualizarUsuari = UsuarioModelos::ActualizarUsuarioModelo($DatosUsuario,$id);
                    
                    if ($ActualizarPersonal == 'exitoso' && $ActualizarUsuari == 'exitoso') 
                    {
                        echo'
                          <script src="vistas/recursos/js/sweetalert.min.js"></script>
                        <script type="text/javascript">
                        swal({
                                    title: "¡Exitoso!",
                                    text: "¡Los datos han sido actualizados correctamente!",
                                    type: "success",
                                    icon:  "success",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                }
                            ).then(function () {
                                location.href="listapersonal";
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
        public function TraerPersonalControlador($Id)
        {
            $TraerPersonal = PersonalModelos::TraerPersonalModelo($Id);
            return $TraerPersonal;
        }

        public function EliminarLogicaPersonalControlador()
        {
            if(isset($_POST['EIdPersonal']))
            {
                    // Enviar datos del Personal
                $tabla = "usuario";
                $Item = "estado";
                $ItemValor = 0;
                $ItemId = "codPersonal";
                $IdValor = $_POST["EIdPersonal"];
                $Eliminar = HeredadoModelos::ActualizarDatoModelo($tabla, $Item, $ItemValor, $ItemId, $IdValor);
                if ($Eliminar == 'update') {
                        echo'
                        <script src="vistas/recursos/js/sweetalert.min.js"></script>
                        <script type="text/javascript">
                        swal({
                                    title: "¡Exitoso!",
                                    text: "¡El personal ha sido Eliminado correctamente!",
                                    type: "success",
                                    icon:  "success",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                }
                            ).then(function () {
                                location.href="listapersonal";
                        });
                        </script>';
                    }
                    else
                    {
                        echo '<script src="vistas/recursos/js/sweetalert.min.js"></script>
                        <script type="text/javascript">
                        swal({
                                    title: "¡Error!",
                                    text: "¡Algo esta fallando!",
                                    type: "danger",
                                    icon:  "warning",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                        });
                        </script>';
                    }

            }
        }

    } 