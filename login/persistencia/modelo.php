<?php
    require_once '../../conexion/conexion.php';
    class Modelo{
        protected $db, $emailseg, $passseg, $nombre;

        function __construct()
        {
            $this->db = Database::connect();
        }
        function getNombre(){
            return $this->nombre;
        }
        function setNombre($nom){
            $this->nombre = $nom;
        }
        function passSeg($pass){
            $this->passseg = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 15]);
        }
        function getEmail(){
            return $this->email;
        }
        function setEmail($email){
            $this->email = $email;
        }
        function login($email){
           $sql = "SELECT * FROM usuarios WHERE email ='$email';"; 
           $res = mysqli_query($this->db, $sql);
            if($res){
                return $res;
            } else {
                return false;
            }
        }
        function registrar(){
            $sql = "INSERT INTO usuarios(nombre, email, clave, cargo) VALUES ('{$this->getNombre()}','{$this->getEmail()}','{$this->passseg}','1')";
            $res = mysqli_query($this->db, $sql);
            if($res){
                return true;
            } else {
                return false;
            }
        }
    }
?>