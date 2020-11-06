<?php
    class CargoControladores
    {
        public function ListaCargoControlador()
        {
            $ListaCargo = CargoModelos::ListaCargosModelo();
            foreach ($ListaCargo as $key => $Cargo)
            {
                echo '<option value="'.$Cargo["codCargo"].'">'.$Cargo["descripcionCargo"].'</option>';
            }
        }

        public function ValidarCargoControlador($id){
            $response = CargoModelos::ValidarCargoModelo($id);
            return $response;
        }


        public function ListaTablaCargoControlador()
        {
            $ListaCargo = CargoModelos::ListaCargosModelo();
            foreach ($ListaCargo as $key => $Cargo)
            {
                 $i++;
                echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$Cargo["descripcionCargo"].'</td>
                    <td>
                        <button id="btnCargoEditar" IdCargo="'.$Cargo["codCargo"].'" data-toggle="modal" data-target="#ModalEditarCargo" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></button> 
                         <button id="btnCargoEliminar" IdCargo="'.$Cargo["codCargo"].'" data-toggle="modal" data-target="#ModalEliminarCargo" class="btn btn-outline-dark"><i class="fas fa-trash" ></i></button>
                    </td>
                </tr>';
            }
        }

        public function InsertarCargoControlador()
        {
            if(isset($_POST['UICargoDescripcion']))
            {

                    // Enviar datos del Beneficiario
                    $Tabla = 'cargo';
                    $item = 'codCargo';
                    $codCargo = HeredadoModelos::UltimoIdModelo($item, $Tabla) + 1;
                    $Datos = array(
                        "codCargo" => $codCargo,
                        "descripcionCargo" => strtoupper($_POST['UICargoDescripcion']),
                    );
                    

                    $InsertarCargo = CargoModelos::InsertarCargosModelo($Tabla, $Datos);

                    if ($InsertarCargo == 'exitoso') {
                        echo'
                        <script src="vistas/recursos/js/sweetalert.min.js"></script>
                        <script type="text/javascript">
                              swal({
                                    title: "¡Exitoso!",
                                    text: "¡El cargo ha sido registrado correctamente!",
                                    type: "success",
                                    icon:  "success",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                    }
                            ).then(function () {
                                location.href="listaca";
                            });
                        </script>';
                    }
                
            }
        }

        public function TraerCargoControlador($IdCargo)
        {
            $TraerCargo = CargoModelos::TraerCargoModelo($IdCargo);
            return $TraerCargo;
        }

        public function EliminarLogicaCargoControlador()
        {
            if(isset($_POST['EIdCargo']))
            {
                    // Enviar datos del Personal
                $tabla = "cargo";
                $Item = "estadoCargo";
                $ItemValor = 0;
                $ItemId = "codCargo";
                $IdValor = $_POST["EIdCargo"];
                $EliminarCargo = HeredadoModelos::ActualizarDatoModelo($tabla, $Item, $ItemValor, $ItemId, $IdValor);
                if ($EliminarCargo == 'update') {
                        echo'
                        <script src="vistas/recursos/js/sweetalert.min.js"></script>
                        <script type="text/javascript">
                        swal({
                                    title: "¡Exitoso!",
                                    text: "¡El Cargo ha sido Eliminado correctamente!",
                                    type: "success",
                                    icon:  "success",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                }
                            ).then(function () {
                                location.href="listaca";
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

        public function ActualizarCargoControlador()
        {
            if(isset($_POST['IdCargo']))
            {
                    // Enviar datos del Personal
                $tabla = "cargo";
                $Item = "descripcionCargo";
                $ItemValor = $_POST["ECargoDescripcion"];
                $ItemId = "codCargo";
                $IdValor = $_POST["IdCargo"];
                $EliminarLocalidad = HeredadoModelos::ActualizarDatoModelo($tabla, $Item, $ItemValor, $ItemId, $IdValor);
                if ($EliminarLocalidad == 'update') {
                        echo'
                        <script src="vistas/recursos/js/sweetalert.min.js"></script>
                        <script type="text/javascript">
                        swal({
                                    title: "¡Exitoso!",
                                    text: "¡El Cargo ha sido Actualizado correctamente!",
                                    type: "success",
                                    icon:  "success",
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm: false
                                }
                            ).then(function () {
                                location.href="listaca";
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