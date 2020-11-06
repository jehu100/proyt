<?php
    require_once '../controladores/cargo.controlador.php';
    require_once '../modelos/cargo.modelo.php';

    class AjaxCargo
    {
        
        public $UICargoDescripcion;
        public function ValidarCargo()
        {
            $UICargoDescripcion = $this -> UICargoDescripcion;
            $response = CargoControladores::ValidarCargoControlador($UICargoDescripcion);
            echo json_encode($response);
        }


        public $IdCargo;
        public function TraerCargo()
        {
            $IdCargo = $this -> IdCargo;
            $response = CargoControladores::TraerCargoControlador($IdCargo);
            echo json_encode($response);
        }
    }

    if(isset($_POST["UICargoDescripcion"])){
        $ValidarCargo = new AjaxCargo();
        $ValidarCargo -> UICargoDescripcion = $_POST["UICargoDescripcion"];
        $ValidarCargo -> ValidarCargo();
    }


    if(isset($_POST["IdCargo"])){
        $TraerCargo = new AjaxCargo();
        $TraerCargo -> IdCargo =  $_POST["IdCargo"];
        $TraerCargo -> TraerCargo();
    }