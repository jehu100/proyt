<?php
class AsignarBusControladores{


    public function ListaBusesAsigandosControlador(){

        $ListaAsignados = AsignarBusModelos::ListaBusesAsigandosModelo();
        foreach ($ListaAsignados as $key => $Asigandos){
            $i++;
                $Estado = ($Personal['Estado'] == '1') ? 'Incativo' : 'Activo';
                echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$Asigandos['nom'].' '.$Asigandos["ape_pater"].' '.$Asigandos["ape_mater"].' '.$Asigandos["ci"].'</td>
                    <td>'.$Asigandos["placa"].' '.$Asigandos["marca"].'</td>
                    <td>'.$Asigandos['Anombre'].' '.$Asigandos["Aape_pater"].' '.$Asigandos["Aape_mater"].' '.$Asigandos["Aci"].'</td>
                    <td>'.$Estado.'</td>
                    <td>                      
                        <button id="btnBusEditar" idBuss="'.$Bus["idBus"].'" data-toggle="modal" data-target="#ModalEditarBus" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></button>
                        <button id="btnPersonalEliminar" IdPersonal="'.$Bus["codPersonal"].'" data-toggle="modal" data-target="#ModalEliminarPersonal" class="btn btn-outline-dark"><i class="fas fa-trash" ></i></button>
                    </td>
                </tr>';
        }
    }



    public function InsertarAsignacionBusControlador(){

        if(isset($_POST["idConductor"]))
        {
            $idConductor =$_POST["idConductor"];
            $TraerId = AsignarBusModelos::ValidarAsignacionModelo($idConductor);
            if ($TraerId["idConductor"] == $idConductor )
            {
                echo'
                      <script src="vistas/recursos/js/sweetalert.min.js"></script>
                    <script type="text/javascript">
                    swal({
                                title: "¡Error!",
                                text: "¡El numero de ci de Ayudante ya existe!",
                                type: "danger",
                                icon:  "warning",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                    });
                    </script>';
            }

           else{
            $DatosControlador = array(
                'idConductor' => $_POST['idConductor'],
                'idAyudante' => $_POST['idAyudante'],
                'idBus' => $_POST['idBus'],
                'fechaAsignacion' => $_POST['fechaAsignacion'], 
            );
            $llamarSkill = AsignarBusModelos::InsertarAsignacionBusModelo($DatosControlador);

            if ($llamarSkill == 'success') {
                echo'
                <script src="vistas/recursos/js/sweetalert.min.js"></script>
                <script type="text/javascript">
                      swal({
                            title: "¡Exitoso!",
                            text: "¡Bus Asigando Correctamente!",
                            type: "success",
                            icon:  "success",
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                            }
                    ).then(function () {
                        location.href="asignarbus";
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

    public function SeleccioanarConductorControlador(){

        $ListaConductor = AsignarBusModelos::ListaConductorModelo();
		foreach ($ListaConductor as $key => $Conductor) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Conductor["idConductor"].'"><h1>C.I.</h1> '.$Conductor["ci"].' - '.$Conductor["nom"].' '.$Conductor["ape_pater"].'  '.$Conductor["ape_mater"].'</option>';

		}
    }

    public function SeleccioanarAyudanteControlador(){

        $ListaAyudante = AsignarBusModelos::ListaAyudanteModelo();
		foreach ($ListaAyudante as $key => $Ayudante) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Ayudante["idAyudante"].'"><h1>C.I.</h1> '.$Ayudante["Aci"].' - '.$Ayudante["Anombre"].' '.$Ayudante["Aape_pater"].' '.$Ayudante["Aape_mater"].'</option>';

		}
    }


    public function SeleccioanarBusControlador(){

        $ListaBus = AsignarBusModelos::ListBusModelo();
		foreach ($ListaBus as $key => $Bus) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Bus["idBus"].'"><h1>Placa</h1> - '.$Bus["placa"].' - '.$Bus["marca"].'</option>';

		}
    }


}