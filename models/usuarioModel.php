<?php
//en Models se hace las querys y se conecta a la BD
    class usuarioModel
    {
        private $conexion;

        public function __construct(){
            require_once("../config/conexion.php");
            $con = new Conexion();
            $this->conexion = $con->conexion();
        }

        public function insertar($nombres,$apellidos,$dni,$fecha_nac,$genero){
           $statement = "INSERT INTO empleados VALUES (NULL, :nombres, :apellidos, :dni, :fecha_nac, :genero)"; 
           $statement = $this->conexion->prepare($statement);
           $statement->bindParam(":nombres",$nombres);
           $statement->bindParam(":apellidos",$apellidos);
           $statement->bindParam(":dni",$dni);
           $statement->bindParam(":fecha_nac",$fecha_nac);
           $statement->bindParam(":genero",$genero);
           return ($statement->execute()) ? $this->conexion->lastInsertId() : false;
        }

        public function listar(){
            $statement = "SELECT * FROM empleados"; 
            $statement = $this->conexion->prepare($statement);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function borrar($id){
            $statement = "DELETE FROM empleados WHERE id = :id";
            $statement = $this->conexion->prepare($statement);
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? true : false;
        }

        public function mostrar($id){
            $statement = "SELECT * FROM empleados WHERE id = :id";
            $statement = $this->conexion->prepare($statement);
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }

        public function actualizar($id,$nombres,$apellidos,$dni,$fecha_nac,$genero){
            $statement = "UPDATE empleados SET nombres= :nombres, apellidos= :apellidos, dni= :dni, fecha_nac= :fecha_nac, genero= :genero WHERE id = :id";
            $statement = $this->conexion->prepare($statement);
            $statement->bindParam(":id",$id);
            $statement->bindParam(":nombres",$nombres);
            $statement->bindParam(":apellidos",$apellidos);
            $statement->bindParam(":dni",$dni);
            $statement->bindParam(":fecha_nac",$fecha_nac);
            $statement->bindParam(":genero",$genero);
            return ($statement->execute()) ? $id : false;
        }
    }
    
?>