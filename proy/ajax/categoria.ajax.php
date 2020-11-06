<?php
    require_once '../controladores/categoria.controlador.php';
    require_once '../modelos/categoria.modelo.php';

    class AjaxCategoria
    {
        
        public $CategoriaDescripcion;
        public function ValidarCategoria()
        {
            $CategoriaDescripcion = $this -> CategoriaDescripcion;
            $response = CategoriaControladores::ValidarCategoriaControlador($CategoriaDescripcion);
            echo json_encode($response);
        }


        public $IdCategoria;
        public function TraerCategoria()
        {
            $IdCategoria = $this -> IdCategoria;
            $response = CategoriaControladores::TraerCategoriaControlador($IdCategoria);
            echo json_encode($response);
        }
    }

    if(isset($_POST["CategoriaDescripcion"])){
        $ValidarCategoria = new AjaxCategoria();
        $ValidarCategoria -> CategoriaDescripcion = $_POST["CategoriaDescripcion"];
        $ValidarCategoria -> ValidarCategoria();
    }


    if(isset($_POST["IdCategoria"])){
        $TraerCategoria = new AjaxCategoria();
        $TraerCategoria -> IdCategoria =  $_POST["IdCategoria"];
        $TraerCategoria -> TraerCategoria();
    }