<?php
if (isset($_POST['submit'])) {
    $Nombre = isset($_POST['NOMBRE']) ? $_POST['NOMBRE'] : false;
    $Direccion = isset($_POST['DIRECCION']) ? $_POST['DIRECCION'] : false;
    $Email = isset($_POST['E-MAIL']) ? $_POST['E-MAIL'] : false;
    $Motivo = isset($_POST['motivo']) ? $_POST['motivo'] : false;

    if ($Nombre && $Direccion && $Email && $Motivo) {

        $destino = "Angelamoreno@cobrascol.com";

        $body = "Hola!\n\nTienes un nuevo mensaje del formulario de contacto de la web.\n" . $Nombre . "\n" . $Direccion . "\n" . $Email . "\n" . $Motivo;

        $subject = "Nuevio Mensaje";

        $headers = 'From: www.cobrascolltda.com.co' . "\r\n" .
            'Reply-To: www.cobrascolltda.com.co' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (mail($destino, $subject, $body, $headers)) {
            echo '<script type="text/javascript">
            alert("Datos Enviados con exito. Muy pronto nos contactaremos contigo");
            window.location.href="../../index.php";
            </script>';
        } else {
            echo '<script type="text/javascript">
            alert("Hemos detectado un error en el sistema. por favor intentelo de nuevo");
            window.location.href="../../index.php";
            </script>';
        }
    } else {
        echo '<script type="text/javascript">
            alert("Hemos detectado un error en el sistema. por favor intentelo de nuevo");
            window.location.href="../../index.php";
            </script>';
    }
} else {
    echo '<script type="text/javascript">
            alert("Hemos detectado un error en el sistema. por favor intentelo de nuevo");
            window.location.href="../../index.php";
            </script>';
}
