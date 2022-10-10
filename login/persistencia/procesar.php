<?php
    require_once 'modelo.php';
    $actuvador = new Modelo();

    if(isset($_POST['inicio'])){
        if(!empty($_POST['email']) || !empty($_POST['pass'])){
            
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $pass = isset($_POST['pass']) ? $_POST['pass'] : false;
            $vali = $actuvador->login($email);
            $num = mysqli_num_rows($vali);
            
            if($num == 1){
                $res = mysqli_fetch_object($vali);
                if($email == $res->email){
                    if(password_verify($pass, $res->clave)){
                        session_start();
                        $_SESSION['Usuario'] = $res;
                        header('Location: ../../crud/index.php');
                    }else{
                        echo'<script type="text/javascript">
                    alert("Ha ocurrido un error interno, por favor vuelva a intentarlo.");
                    window.location.href="../index.php";
                    </script>';
                    }
                }else{
                    echo'<script type="text/javascript">
                    alert("Ha ocurrido un error interno, por favor vuelva a intentarlo.");
                    window.location.href="../index.php";
                    </script>';
                }
            }

        } else {
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos.");
                    window.location.href="index.php";
                    </script>';
        }
    }

    if(isset($_POST['registro'])){
        if(!empty($_POST['emailr']) || !empty($_POST['passr']) || !empty($_POST['nombre'])){

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $emailr = isset($_POST['emailr']) ? $_POST['emailr'] : false;
            $passr = isset($_POST['passr']) ? $_POST['passr'] : false;

            $actuvador->setNombre($nombre);
            $actuvador->passSeg($passr);
            $actuvador->setEmail($emailr);
            $resultado = $actuvador->registrar();

            if($resultado == true){
                echo'<script type="text/javascript">
                    alert("Registro de datos exitoso.");
                    window.location.href="../index.php";
                    </script>';
            } else {
                echo'<script type="text/javascript">
                    alert("Ha ocurrido un error interno, por favor vuelva a intentarlo.");
                    window.location.href="registro.php";
                    </script>';
            }

        } else {
            echo'<script type="text/javascript">
                    alert("Debe llenar todos los campos.");
                    window.location.href="index.php";
                    </script>';
        }
    }
?>