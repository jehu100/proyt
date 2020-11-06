<?php
    // Coontroladores
    require_once 'controladores/plantilla.controlador.php';
    require_once 'controladores/enlaces.controlador.php';
    require_once 'controladores/ingreso.controlador.php';
    require_once 'controladores/funciones.controlador.php';
    require_once 'controladores/usuario.controlador.php';
    require_once 'controladores/personal.controlador.php';
    require_once 'controladores/cargo.controlador.php';
    require_once 'controladores/conductor.controlador.php';
    require_once 'controladores/nivelpropiedad.controlador.php';
    require_once 'controladores/bus.controlador.php';
    require_once 'controladores/ayudante.controlador.php';
    require_once 'controladores/asignarbus.controlador.php';
    require_once 'controladores/asignarviaje.controlador.php';
    require_once 'controladores/encomienda.controlador.php';
    require_once 'controladores/tiposangre.controlador.php';
    
    


    // Modelos
    require_once 'modelos/enlaces.modelo.php';
    require_once 'modelos/ingreso.modelo.php';
    require_once 'modelos/personal.modelo.php';
    require_once 'modelos/usuario.modelo.php';
    require_once 'modelos/cargo.modelo.php';
    require_once 'modelos/conductor.modelo.php';
    require_once 'modelos/nivelpropiedad.modelo.php';
    require_once 'modelos/bus.modelo.php';
    require_once 'modelos/ayudante.modelo.php';
    require_once 'modelos/asignarbus.modelo.php';
    require_once 'modelos/asignarviaje.modelo.php';
    require_once 'modelos/encomienda.modelo.php';
    require_once 'modelos/heredado.modelo.php';
    require_once 'modelos/heredado2.modelo.php';
    require_once 'modelos/tiposangre.modelo.php';
  
 
    
    // Llamar plantilla
    $Plantilla = new PlantillaControladores();
    $Plantilla -> LlamarPlantillaControlador();