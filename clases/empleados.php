<?php
include_once("../config/conexion.php");

class Empleados extends Conexion{
    
    public function Listar($sql){
        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

    public function Register($sql){
        $consulta = $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }
}



?>