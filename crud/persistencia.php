<?php
    require_once 'modelo.php';
    
    class Admin{
        function getDatos(){
            $activa = new Administracion();
            $datos = $activa->getData();            
            return $datos;
        }
        function getdatosespe($id){
            $activa = new Administracion();
            $datos = $activa->getOne($id);
            $lista = mysqli_fetch_object($datos);
            return $lista; 
        }
        function updatedatos($id, $resp){
            $activa = new Administracion();
            $datos = $activa->updateData($id, $resp);            
            return $datos;
        }
        function delete($id){
            $activa = new Administracion();
            $datos = $activa->deleteData($id);            
            return $datos;
        }
    }

?>