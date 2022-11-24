<?php

    class usuarioController
    {
        private $model;

        public function __construct(){
            require_once("../models/usuarioModel.php");
            $this->model = new usuarioModel();
        }

        public function insert($nombres,$apellidos,$dni,$fecha_nac,$genero){
            $id = $this->model->insertar($nombres,$apellidos,$dni,$fecha_nac,$genero);
            return ($id!=false) ? header("Location:listEmp.php?id=".$id) : header("Location:registerEmp.php");
        }

        public function list(){
            $list = $this->model->listar();
            return $list;
        }

        public function delete($id){
            $delete = $this->model->borrar($id);
            return $delete ? header("Location:listEmp.php") : header("Location:listEmp.php?borrar=error");
        }

        public function show($id){
            $show = $this->model->mostrar($id);
            return $show!=false ? $show : header("Location:listEmp.php");
        }

        public function update($id,$nombres,$apellidos,$dni,$fecha_nac,$genero){
            $show = $this->model->actualizar($id,$nombres,$apellidos,$dni,$fecha_nac,$genero);
            return $show==false ? header("Location:viewEmp.php?id=".$id) : header("Location:listEmp.php");
        }

    }
    
?>