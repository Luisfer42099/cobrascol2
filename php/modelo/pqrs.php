<?php
    require_once '../../conexion/conexion.php';
    class pqrs{
        private $ced,$nomb,$apel,$tele,$tipo,$corr,$mens;
        private $db;

        function __construct()
        {
            $this->db = Database::connect();
        }
        function getCedula(){
            return $this->ced;
        }
        function getNombre(){
            return $this->nomb;
        }
        function getApellido(){
            return $this->apel;
        }
        function getTelefono(){
            return $this->tele;
        }
        function getTipo(){
            return $this->tipo;
        }
        function getCorreo(){
            return $this->corr;
        }
        function getMensaje(){
            return $this->mens;
        }
        function setCedula($ce){
            $this->ced = $ce;
        }
        function setNombre($nom){
            $this->nomb = $this->db->real_escape_string($nom);
        }
        function setApellido($ape){
            $this->apel = $this->db->real_escape_string($ape);
        }
        function setTelefono($tel){
            $this->tele = $this->db->real_escape_string($tel);
        }
        function setTipo($tip){
            $this->tipo = $this->db->real_escape_string($tip);
        }
        function setCorreo($cor){
            $this->corr = $this->db->real_escape_string($cor);
        }
        function setMensaje($mem){
            $this->mens = $this->db->real_escape_string($mem);
        }

        public function add(){
            $sql = "INSERT INTO pqrs(id, cedula, nombre, apellido, telefono, tipo, correo, mensaje, fecha, hora, estado) VALUES 
                    (NULL,'{$this->getCedula()}','{$this->getNombre()}','{$this->getApellido()}','{$this->getTelefono()}','{$this->getTipo()}','{$this->getCorreo()}','{$this->getMensaje()}', CURDATE(), CURTIME(),'pendiente')";
            $save = mysqli_query($this->db,$sql);
            $result = false;
            if ($save) {
                $result = true;
            }
            return $result; 
        }
        function getAll(){
            $sql = "SELECT * FROM pqrs WHERE cedula = {$this->getCedula()}";
            $save = mysqli_query($this->db,$sql);
            return $save;
        }
    }
