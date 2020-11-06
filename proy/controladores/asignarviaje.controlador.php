<?php
class AsignarViajeControladores{



    public function InsertarAsignacionViajeControlador(){

        if(isset($_POST["idAsignacion"]))
        {
            $idAsignacion =$_POST["idAsignacion"];
            $TraerId2 = AsignarViajeModelos::ValidarAsignacionViajenModelo($idAsignacion);
            if ($TraerId2["idAsignacion"] == $idAsignacion )
            {
                echo'
                      <script src="vistas/recursos/js/sweetalert.min.js"></script>
                    <script type="text/javascript">
                    swal({
                                title: "¡Error!",
                                text: "¡El numero  ya existe!",
                                type: "danger",
                                icon:  "warning",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                    });
                    </script>';
            }

           else{
            $DatosControlador = array(
                'idAsignacion' => $_POST['idAsignacion'],
                'IdDestinoPartida' => $_POST['IdDestinoPartida'],
                'idDestinoLlegada' => $_POST['idDestinoLlegada'],
                'idHora' => $_POST['idHora'], 
                'fechaasign' => $_POST['fechaasign'], 
            );
            $llamarSkill = AsignarViajeModelos::InsertarAsignaciondeViajeModelo($DatosControlador);

            if ($llamarSkill == 'success') {
                echo'
                <script src="vistas/recursos/js/sweetalert.min.js"></script>
                <script type="text/javascript">
                      swal({
                            title: "¡Exitoso!",
                            text: "¡El Ayudante a sido Registrado Correcatamente!",
                            type: "success",
                            icon:  "success",
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                            }
                    ).then(function () {
                        location.href="asignarviaje";
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


    public function SeleccioanarBusesAsignadosControlador(){

        $ListaBusAsig = AsignarViajeModelos::ListaAsiganciondeBusModelo();
		foreach ($ListaBusAsig as $key => $Conductor) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Conductor["idAsignacion"].'"><h1>C.I.</h1> '.$Conductor["ci"].' '.$Conductor["nom"].' '.$Conductor["ape_pater"].' -<h1>BUS</h1> '.$Conductor["placa"].'</option>';

		}
    }
    public function SeleccionarLugarPartida(){

        $ListaLugarPartida = AsignarViajeModelos::ListaLugarPartidaModelo();
		foreach ($ListaLugarPartida as $key => $Partdida) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Partdida["idDestinoPartida"].'">'.$Partdida["lugar"].'</option>';

		}

    }

    public function SeleccionarLugarDestino(){

        $ListaLugarDestino = AsignarViajeModelos::ListaLugarDestinoModelo();
		foreach ($ListaLugarDestino as $key => $Destino) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Destino["idDestinoLlegada"].'">'.$Destino["DElugar"].'</option>';

		}

    }

    public function SeleccionarHoraControlador(){

        $ListaHora = AsignarViajeModelos::ListaHoraModelo();
		foreach ($ListaHora as $key => $Hora) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Hora["idHora"].'">'.$Hora["hora"].'</option>';

		}

    }
}