<?php
    class EnlacesModelos
    {
        public function EnlacesModelo($enlace)
        {
            if($enlace == 'ingreso' ||
                $enlace == 'panel' ||
                $enlace == 'salir' ||
                $enlace == '404' ||
                $enlace == 'listapersonal' ||
                $enlace == 'cambionombre' ||
                $enlace == 'usuario' ||
                $enlace == 'olvido' ||
                $enlace == 'personal'||
                $enlace == 'bus'||
                $enlace == 'conductor'||
                $enlace == 'ayudante'||
                $enlace == 'asignarbus'||
                $enlace == 'asignarviaje'||
                $enlace == 'encomienda'||
                $enlace == 'listabus'||
                $enlace == 'listaconductor'||
                $enlace == 'listaasignacionbus'||
                $enlace == 'Reportebus'||
                $enlace == 'conductor'
               
                )
            {
                $ruta = "vistas/componentes/".$enlace.".php";

            }
            else if ($enlace == "index"){
                $ruta = "vistas/componentes/ingreso.php"; 
            }
            else
            {
                $ruta = "vistas/componentes/404.php";
            }

            return $ruta;
        }
    }