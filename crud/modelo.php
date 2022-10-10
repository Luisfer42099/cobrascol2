<?php
    require_once '../conexion/conexion.php';
    class Administracion{
        protected $db;

        function __construct(){
            $this->db = Database::connect();
        }

        function getData(){
            $sql = "SELECT * FROM pqrs";
            $res = mysqli_query($this->db, $sql);
            if($res){
                return $res;
            } else {
                return false;
            }
        }
        function getOne($id){
            $sql = "SELECT * FROM pqrs  WHERE id = '$id'";
            $res = mysqli_query($this->db, $sql);
            if($res){
                return $res;
            } else {
                return false;
            }
        }
        function updateData($id, $resp){
            $sql = "UPDATE pqrs SET respuesta='$resp', estado='resuelto' WHERE id = '$id'";
            $res = mysqli_query($this->db, $sql);
            if($res){
                return true;
            } else {
                return false;
            }
        }
        function deleteData($id){
            $sql = "DELETE FROM pqrs WHERE id = '$id'";
            $res = mysqli_query($this->db, $sql);
            if($res){
                return true;
            } else {
                return false;
            }
        }
    }
?>