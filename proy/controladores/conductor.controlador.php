<?php
class ConductorControladores{

    public function ListaConductorControlador(){

        $ConductorBus = ConductorModelo::LisConductorModelo();
        foreach ($ConductorBus as $key => $Conductor){
            $i++;
                $Estado = ($Personal['Cestado'] == '1') ? 'Incativo' : 'Activo';
                echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$Conductor["ci"].'</td>
                    <td>'.$Conductor["Departamento"].'</td>
                    <td>'.$Conductor['nom'].' '.$Conductor["ape_pater"].' '.$Conductor["ape_mater"].'</td>
                    <td>'.$Conductor["dir"].'</td>
                    <td>'.$Conductor["tel"].'</td>
                    <td>'.$Conductor["Tipo"].'</td>
                    <td>'.$Conductor["nivel"].'</td>
                    <td>'.$Conductor["fingreso"].'</td>
                    <td>
                    <span class="avatar avatar-online">
                        <img height="100" src="'.$Conductor["CFoto"].'" alt="User">
                    </span>
                    </td>
                    <td>'.$Estado.'</td>
                    <td>                      
                        <button id="btnBusEditar" idBuss="'.$Conductor["idBus"].'" data-toggle="modal" data-target="#ModalEditarBus" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></button>
                        <button id="btnPersonalEliminar" IdPersonal="'.$Conductor["codPersonal"].'" data-toggle="modal" data-target="#ModalEliminarPersonal" class="btn btn-outline-dark"><i class="fas fa-trash" ></i></button>
                    </td>
                </tr>';
        }


    }


    public function InsertarConductorControlador(){

        if(isset($_POST["ci"]))
        {
        
                $ruta = "";
                if(isset($_FILES["CFoto"]["tmp_name"]))
                {
                    list($ancho, $alto) = getimagesize($_FILES["CFoto"]["tmp_name"]);
                    $nuevoAncho = 500;
                    $nuevoAlto = 500;
                          // Capturar el IdPersonal Maximo de la tabla personal
                          $item = 'idConductor';
                          $tabla = 'conductor';
                          $IdPersonal = HeredadoModelos2::UltimoIdConductorModelo($item, $tabla) + 1;
    
                          // Crear capeta dedicada al usuario por insertar
                        $directorio = 'vistas/recursos/img/conductores/'.$IdPersonal;
                        mkdir($directorio, 0755);
    
                    // Validar tipo de imagen JPG
                    if($_FILES["CFoto"]["type"] == "image/jpeg")
                    {
                        $aleatorio = mt_rand(100, 999);
                        $ruta = 'vistas/recursos/img/conductores/'.$IdPersonal.'/'.$aleatorio.'.jpg';
                        $origen = imagecreatefromjpeg($_FILES["CFoto"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        imagejpeg($destino, $ruta);
                    }
    
                         // Validar tipo de imagen PNG
    
                         if($_FILES["CFoto"]["type"] == "image/png")
                         {
                             $aleatorio = mt_rand(100, 999);
                             $ruta = 'vistas/recursos/img/conductores/'.$IdPersonal.'/'.$aleatorio.'.png';
                             $origen = imagecreatefrompng($_FILES["CFoto"]["tmp_name"]);
                             $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                             imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                             imagepng($destino, $ruta);
                         }
    
    
                }
            

            $ci =$_POST["ci"];
            $TraerCI = ConductorModelo::ValidarConductorModelo($ci);
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

           else{
            $DatosControlador = array(
                'ci' => $_POST['ci'],
                'idlugar' => $_POST['idlugar'],
                'nom' => $_POST['nom'],
                'ape_pater' => $_POST['ape_pater'],
                'ape_mater' => $_POST['ape_mater'],
                'dir' => $_POST['dir'],
                'tel' => $_POST['tel'],
                'idSangre' => $_POST['idSangre'],
                'idpropiedad' => $_POST['idpropiedad'],
                'fingreso' => $_POST['fingreso'],
                "CFoto" => $ruta
            );
            $llamarSkill = ConductorModelo::InsertarConductorModelo($DatosControlador);

            if ($llamarSkill == 'success') {
                echo'
                <script src="vistas/recursos/js/sweetalert.min.js"></script>
                <script type="text/javascript">
                      swal({
                            title: "¡Exitoso!",
                            text: "¡El Conductor a sido Registrado Correcatamente!",
                            type: "success",
                            icon:  "success",
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                            }
                    ).then(function () {
                        location.href="conductor";
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

    public function SeleccioanarSangreControlador(){

        $ListaSangre = ConductorModelo::ListaSangreModelo();
		foreach ($ListaSangre as $key => $Sangre) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Sangre["idSangre"].'">'.$Sangre["Tipo"].'</option>';

		}
    }

    public function SeleccionarLugarCiControlador(){

        $ListaLugar = ConductorModelo::ListaLugarModelo();
		foreach ($ListaLugar as $key => $Lugar) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departamento"].'</option>';

		}
    }

    public function ListaNoAsigandosControlador()
    {
        $ListaConductor = ConductorModelo::ListaNoAsigandosModelo();
        foreach ($ListaConductor as $key => $Conductor2)
        {
             $i++;
             $Estado = ($Conductor2['CAasignado'] == '0') ? 'Asignado' : 'No Asigando';
            echo '<tr>
                <td>'.$i.'</td>
                <td>'.$Conductor2["ci"].'</td> 
                <td>'.$Conductor2['nom'].' '.$Conductor2["ape_pater"].' '.$Conductor2["ape_mater"].'</td>
                <td>'.$Estado.'</td>
            </tr>';
        }
    }

}