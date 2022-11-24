<?php

    class Conexion{
        private $servidor="localhost";
        private $user="root";
        private $password="";
        private $db="empleados";

        public function conexion(){

            try {
                $conexion = new PDO("mysql:host=".$this->servidor.";dbname=".$this->db,$this->user,$this->password);
                //$this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $conexion;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
    

?>