<?php
class AyudanteControladores{

    public function InsertarAyudanteControlador(){


        if(isset($_POST["Aci"]))
        {
            $Aci =$_POST["Aci"];
            $TraerCi = AyudanteModelos::ValidarAyudanteModelo($Aci);
            if ($TraerCi["Aci"] == $Aci )
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
                'Aci' => $_POST['Aci'],
                'idlugar' => $_POST['idlugar'],
                'Anombre' => $_POST['Anombre'],
                'Aape_pater' => $_POST['Aape_pater'],
                'Aape_mater' => $_POST['Aape_mater'],
                'Aedad' => $_POST['Aedad'],
                'Adireccion' => $_POST['Adireccion'],
                'Acelular' => $_POST['Acelular'],
                'idSangre' => $_POST['idSangre'],
                'fecha' => $_POST['fecha'],
               
            );
            $llamarSkill = AyudanteModelos::InsertarAyudanteModelo($DatosControlador);
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
                        location.href="ayudante";
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

        $ListaSangre = AyudanteModelos::ListaSangreModelo();
		foreach ($ListaSangre as $key => $Sangre) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Sangre["idSangre"].'">'.$Sangre["Tipo"].'</option>';

		}
    }

    public function SeleccionarLugarCiControlador(){

        $ListaLugar = AyudanteModelos::ListaLugarModelo();
		foreach ($ListaLugar as $key => $Lugar) 
		{
			//echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
			echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departamento"].'</option>';

		}
    }

    public function ListaAyudanteNoAsigandosControlador()
    {
        $ListaAyudantes = AyudanteModelos::ListaAyudanteNoAsigandosModelo();
        foreach ($ListaAyudantes as $key => $Ayudante2)
        {
             $i++;
             $Estado = ($Personal['CAasignado'] == '0') ? 'Asignado' : 'No Asigando';
            echo '<tr>
                <td>'.$i.'</td>
                <td>'.$Ayudante2["Aci"].'</td> 
                <td>'.$Ayudante2['Anombre'].' '.$Ayudante2["Aape_pater"].' '.$Ayudante2["Aape_mater"].'</td>
                <td>'.$Estado.'</td>
            </tr>';
        }
    }

}