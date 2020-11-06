<?php
    require_once '../controladores/bus.controlador.php';
    require_once '../modelos/bus.modelo.php';

    class AjaxBus
    {
        public $idBuss;
        public function TraerBus()
        {
            $idBuss = $this -> idBuss;
            $response = BusControladores::TraerBusControlador($idBuss);
            echo json_encode($response);
        }

       
    }

    if(isset($_POST["idBuss"])){
        $TraerBus = new AjaxBus();
        $TraerBus -> idBuss =  $_POST["idBuss"];
        $TraerBus -> TraerBus();
    }

  