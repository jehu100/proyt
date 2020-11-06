<?php
    require_once '../controladores/personal.controlador.php';
    require_once '../modelos/personal.modelo.php';

    class AjaxPersonal
    {
        public $IdPersonal;
        public function TraerPersonal()
        {
            $IdPersonal = $this -> IdPersonal;
            $response = PersonalControladores::TraerPersonalControlador($IdPersonal);
            echo json_encode($response);
        }

        public $CIValidar;
        public function ValidarCI()
        {
            $CIValidar = $this -> CIValidar;
            $response = PersonalControladores::ValidarPersonalControlador($CIValidar);
            echo json_encode($response);
        }
    }

    if(isset($_POST["IdPersonal"])){
        $TraerPersonal = new AjaxPersonal();
        $TraerPersonal -> IdPersonal =  $_POST["IdPersonal"];
        $TraerPersonal -> TraerPersonal();
    }

    if(isset($_POST["CIValidar"])){
        $ValidarCI = new AjaxPersonal();
        $ValidarCI -> CIValidar = $_POST["CIValidar"];
        $ValidarCI -> ValidarCI();
    }