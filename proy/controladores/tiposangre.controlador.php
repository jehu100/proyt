<?php
class TipoSangreControaldores{

    public function InsertarTipoSangreControlador(){

        if(isset($_POST["Tipo"]))
        {
            $Tipo =$_POST["Tipo"];
            $TraerTipo = TipodeSangreModelos::ValidarTipoSangreModelo($Tipo);
            if ($TraerTipo["Tipo"] == $Tipo )
            {
                echo'
                      <script src="vistas/recursos/js/sweetalert.min.js"></script>
                    <script type="text/javascript">
                    swal({
                                title: "¡Error!",
                                text: "¡El Tipo de Sangre ya Existe!",
                                type: "danger",
                                icon:  "warning",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                    });
                    </script>';
            }

           else{
            $DatosControlador = array(
                'Tipo' => $_POST['Tipo']
               
            );
            $llamarSkill = TipodeSangreModelos::InsertarTipoSangreModelo($DatosControlador);
            if ($llamarSkill == 'success') {
                echo'
                <script src="vistas/recursos/js/sweetalert.min.js"></script>
                <script type="text/javascript">
                      swal({
                            title: "¡Exitoso!",
                            text: "¡Tipo de Sangre Registrado Correctamente!",
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


}