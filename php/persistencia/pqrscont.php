<?php
    require_once '../modelo/pqrs.php';
    $peticionn = new pqrs();

    if(isset($_POST['Enviar'])){
        $cedula = isset($_POST['cedula']) ? $_POST['cedula'] : false;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : false;
        $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
        $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : false;
        
        if($cedula && $nombre && $apellido && $telefono && $tipo && $correo && $mensaje){
            $peticionn->setCedula($cedula);
            $peticionn->setNombre($nombre);
            $peticionn->setApellido($apellido);
            $peticionn->setTelefono($telefono);
            $peticionn->setTipo($tipo);
            $peticionn->setCorreo($correo);
            $peticionn->setMensaje($mensaje);
            
            $destino1 = "servicioalcliente@cobrascol.com.co";
            $destino2 = $correo;
            
            $contenido1 = "Nombre: ".$nombre."\nApellido: ".$apellido."\nTelefono: ".$telefono."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
            $body = "Hola! ".$peticionn->getNombre()."\n\nHemos recibido tu ticket. \nNos pondremos en contacto con tigo lo mas pronto posible.\nMuchas gracias. ";

            $subject = "Confirmacion ticket";
            	
			$headers = 'From: servicioalcliente@cobrascol.com.co' . "\r\n" .
			'Reply-To: servicioalcliente@cobrascol.com.co' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
            
            $save = $peticionn->add();
            
            mail($destino1,"Nuevo Ticket",$contenido1);
            mail($destino2, $subject, $body, $headers);
            
            if($save){
                echo'<script type="text/javascript">
                    alert("Tu PQR ha sido creado y enviado a tu correo.");
                    window.location.href="../../index.php";
                    </script>';
            } else {
                echo'<script type="text/javascript">
                    alert("Ha ocurrido una falla en nuestro sistema, por favor intentelo nuevamente");
                    window.location.href="../../index.php";
                    </script>';
            }
        } else {
            echo'<script type="text/javascript">
                    alert("Ha ocurrido una falla en nuestro sistema, por favor intentelo nuevamente");
                    window.location.href="../../index.php";
                    </script>';
            
        }
    } 

    if(isset($_POST['Descargar'])){
        $nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : false;
        $email = isset($_POST['Email']) ? $_POST['Email'] : false;
        $peticionn->setNombre($nombre);
        $peticionn->setEmail($email);
        $res = $peticionn->saveDescarga();

        if($res){
            header("Location: ../../PDF/Personal-Finance-eBook.pdf");
        } else {
            echo '<script type="text/javascript">
                    alert("Ha ocurrido una falla en nuestra descarga.");
                    window.location.href="../../index.php";
                    </script>';
        }
    }
?>