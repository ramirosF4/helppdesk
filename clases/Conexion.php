<?php
    class Conexion{
        public function conectar(){
            $servidor = "localhost"; 
            $usuario = "root";
            $password = "12345";
            $db = "helpdesk"; 
            $conexion = mysqli_connect($servidor, $usuario, $password, $db); 

            return $conexion; 
        }
    }
?>