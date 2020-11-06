<?php
    class Conexion
    {
        public function Conectar()
        {
            $link = new PDO("mysql:host=localhost;dbname=bdmit", "root", "12345678");
            return $link;
        }
    }