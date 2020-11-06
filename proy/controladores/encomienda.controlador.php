<?php
class encomiendacontroladores{
    public function encomiendacontrolador(){
        if(!empty($_POST)){
            if (isset($_POST['Rci']))
            {
                $Datoscontrolador = array(
                    'Rci' => $_POST['Rci'],
                    'Eci' => $_POST['Eci'],
                    'Enombre' => $_POST['Enombre'],
                    'Eapallido_Pa' => $_POST['Eapallido_Pa'],
                    'Eapellido_Ma' => $_POST['Eapellido_Ma'],
                    'Ecelular' => $_POST['Ecelular'],
                    'idDestinoLlegada' => $_POST['idDestinoLlegada'],
                    'Edescripcion' => $_POST['Edescripcion'],
                    'EmontoCancelado' => $_POST['EmontoCancelado'],
                    'Efecha' => $_POST['Efecha'],
                   
    
                );
                $llamarSkill = encomiendalmodelos::insertarencomiendamodelo($Datoscontrolador);   
                if($llamarSkill == 'success'){

                    echo'
                    <script src="vistas/recursos/JQuery/alert.js.js"></script>
                    <script>	 
                    swal("El archivo ha sido eliminado!")
                    </script>';
                
                }
                
            }
        
          }
        }


public function SeleccioanarRemitenteControlador(){

    $ListaRemitente = encomiendalmodelos::listaremitentemodelo();
    foreach ($ListaRemitente as $key => $Remitente) 
    {
        //echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
        echo '<option value="'.$Remitente["Rci"].'">'.$Remitente["Rci"].'</option>';

    }
}

public function SeleccioanarDestinoControlador(){

    $ListaDestino = encomiendalmodelos::listadestinomodelo();
    foreach ($ListaDestino as $key => $Destino) 
    {
        //echo '<option value="'.$Lugar["idlugar"].'">'.$Lugar["Departeamento"].'</option>';
        echo '<option value="'.$Destino["idDestinoLlegada"].'">'.$Destino["DElugar"].'</option>';

    }
  }
}

