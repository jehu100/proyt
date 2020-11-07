<?php
class BusControladores
{

    public function ListaBusControlador()
    {

        $ListaBus = BusModelos::ListaBusModelo();
        foreach ($ListaBus as $key => $Bus) {
            $i = 1;
            $i++;
            $Estado = ($Bus['Estado'] == '1') ? 'Incativo' : 'Activo';
            echo '<tr>
                    <td>' . $i . '</td>
                    <td>' . $Bus["placa"] . '</td>
                    <td>' . $Bus["marca"] . '</td>
                    <td>' . $Bus["modelo"] . '</td>
                    <td><center>' . $Bus["capacidad"] . '</center></td>
                    <td>' . $Bus['nom'] . ' ' . $Bus["ape_pater"] . ' ' . $Bus["ape_mater"] . '</td>
                    <td>' . $Bus["nivel"] . '</td>
                    <td>' . $Bus['fecha'] . '</td>
                    <td>
                    <span class="avatar avatar-online">
                        <img height="100" src="' . $Bus["Foto"] . '" alt="User">
                    </span>
                    </td>
                    <td>' . $Estado . '</td>
                    <td>                      
                        <button id="btnBusEditar" idBuss="' . $Bus["idBus"] . '" data-toggle="modal" data-target="#ModalEditarBus" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></button>
                        <button id="btnPersonalEliminar" IdPersonal="' . $Bus["codPersonal"] . '" data-toggle="modal" data-target="#ModalEliminarPersonal" class="btn btn-outline-dark"><i class="fas fa-trash" ></i></button>
                    </td>
                </tr>';
        }
    }

    public function InsertarBusControlador()
    {

        if (isset($_POST["placa"])) {


            $placa = $_POST["placa"];
            $TraerPlaca = BusModelos::ValidarBusModelo($placa);
            if ($TraerPlaca["placa"] == $placa) {
                echo '
                      <script src="vistas/recursos/js/sweetalert.min.js"></script>
                    <script type="text/javascript">
                    swal({
                                title: "¡Error!",
                                text: "¡El numero de placa de Bus ya existe!",
                                type: "danger",
                                icon:  "warning",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                    });
                    </script>';
            } else {

                $ruta = "";
                if (isset($_FILES["Foto"]["tmp_name"])) {
                    list($ancho, $alto) = getimagesize($_FILES["Foto"]["tmp_name"]);
                    $nuevoAncho = 500;
                    $nuevoAlto = 500;
                    // Capturar el IdPersonal Maximo de la tabla personal
                    $item = 'idBus';
                    $tabla = 'bus';
                    $IdPersonal = HeredadoModelos2::UltimoIdModelo($item, $tabla) + 1;

                    // Crear capeta dedicada al usuario por insertar
                    $directorio = 'vistas/recursos/img/usuarios/' . $IdPersonal;

                    if (!file_exists($directorio)) {
                        mkdir($directorio, 0777, true);
                    }

                    // Validar tipo de imagen JPG
                    if ($_FILES["Foto"]["type"] == "image/jpeg") {
                        $aleatorio = mt_rand(100, 999);
                        $ruta = 'vistas/recursos/img/usuarios/' . $IdPersonal . '/' . $aleatorio . '.jpg';
                        $origen = imagecreatefromjpeg($_FILES["Foto"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        imagejpeg($destino, $ruta);
                    }

                    // Validar tipo de imagen PNG

                    if ($_FILES["Foto"]["type"] == "image/png") {
                        $aleatorio = mt_rand(100, 999);
                        $ruta = 'vistas/recursos/img/usuarios/' . $IdPersonal . '/' . $aleatorio . '.png';
                        $origen = imagecreatefrompng($_FILES["Foto"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        imagepng($destino, $ruta);
                    }
                }



                $DatosControlador = array(
                    'placa' => $_POST['placa'],
                    'marca' => $_POST['marca'],
                    'modelo' => $_POST['modelo'],
                    'capacidad' => $_POST['capacidad'],
                    'idConductor' => $_POST['idConductor'],
                    'fecha' => $_POST['fecha'],
                    "Foto" => $ruta

                );
                $llamarSkill = BusModelos::InsertarBusModelo($DatosControlador);

                if ($llamarSkill == 'success') {
                    echo '
                <script src="vistas/recursos/js/sweetalert.min.js"></script>
                <script type="text/javascript">
                      swal({
                            title: "¡Exitoso!",
                            text: "¡El Bus a sido Registrado Correcatamente!",
                            type: "success",
                            icon:  "success",
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                            }
                    ).then(function () {
                        location.href="bus";
                    });
                </script>';
                } else {
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

    public function ActualizarBusControlador()
    {
        if (isset($_POST['busmarca'])) {
            // Enviar datos 
            $tabla = 'bus';
            $id = $_POST['idBuss'];
            $Datos = array(
                //nombre base de datos              nombre vista
                "placa" => strtoupper($_POST['busplaca']),
                "marca" => strtoupper($_POST['busmarca']),
                "modelo" => strtoupper($_POST['busmodelo']),
                "capacidad" => strtoupper($_POST['buscapacidad'])

            );
            var_dump($Datos);

            $ActualizarBuss = BusModelos::ActualizarBuslModelo($tabla, $Datos, $id);

            if ($ActualizarBuss == 'exitoso') {
                echo '
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
                            location.href="listabus";
                    });
                    </script>';
            } else {
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

    public function ListaBusNoAsigandosControlador()
    {
        $Listabuses = BusModelos::ListaBusNoAsigandosModelo();
        foreach ($Listabuses as $key => $bus2) {
            $i++;
            $Estado = ($Personal['BAasignado'] == '0') ? 'Asignado' : 'No Asigando';
            echo '<tr>
                <td>' . $i . '</td>
                <td>' . $bus2["placa"] . '</td> 
                <td>' . $bus2['marca'] . '</td>
                <td>' . $Estado . '</td>
            </tr>';
        }
    }


    public function SeleccionarPropietarioConductorControlador()
    {

        $ListaConductor = BusModelos::ListadePropietarioConductor();
        foreach ($ListaConductor as $key => $Conductor) {
            //echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
            echo '<option value="' . $Conductor["idConductor"] . '">' . $Conductor["nom"] . '</option>';
        }
    }

    public function TraerBusControlador($Id)
    {
        $TraerBus = BusModelos::TraerBusModelo($Id);
        return $TraerBus;
    }
}
