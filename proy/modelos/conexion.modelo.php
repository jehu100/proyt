<?php
    class Conexion
    {
        public function Conectar()
        {
            $link = new PDO("mysql:host=localhost;dbname=bdmit", "root", "firebase");
            return $link;
        }
    }