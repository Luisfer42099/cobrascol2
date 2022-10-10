<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
    header('Location: ../login/index.php');
}

if (isset($_GET['id'])) {
    $id = isset($_GET['id']) ? $_GET['id'] : false;
} else {
    header('Location: index.php');
}

require_once 'persistencia.php';
$activador = new Admin();
$lista = $activador->getdatosespe($id);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Expertos en credito y cobranza. El servicio está orientado a efectuar acciones que permitan anticipar la morosidad de las deudas, mediante la telecobranza a los deudores conforme a un calendario mensual de vencimientos">
    <title>COBRASCOL LTDA. Expertos en credito y cobranza.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagenes/Fondoarreglado.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <h3>Expertos en Creditos y Cobranzas.</h3>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="controles">
                    <a href="index.php" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['enviar'])) {
        $respuesta = isset($_POST['respuesta']) ? $_POST['respuesta'] : false;
        $id = isset($_POST['id']) ? $_POST['id'] : false;
        if ($respuesta && $id == true) {

            $destino = $lista->correo;

            $body = "Hola! " . $lista->nombre . "\n\nHemos dado respuesta tu ticket. \nPuedes mirar el estado de tu ticket en nuestra pagina www.cobrascol.com.co en la seccion PQRS.\nMuchas gracias. ";

            $subject = "Respuesta ticket";

            $headers = 'From: servicioalcliente@cobrascol.com.co' . "\r\n" .
                'Reply-To: servicioalcliente@cobrascol.com.co' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($destino, $subject, $body, $headers);

            $res = $activador->updatedatos($id, $respuesta);
            if ($res) {
                echo '<script type="text/javascript">
                    alert("Datos Enviados con exito.");
                    window.location.href="index.php";
                    </script>';
            } else {
                echo '<script type="text/javascript">
                    alert("Ha ocurrido un error interno, por favor vuelva a intentarlo.");
                    window.location.href="edit.php";
                    </script>';
            }
        }
    }
    ?>

    <div class="container">
        <h2>Dar Respuesta</h2>
        <form action="" class="formedit" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <input type="hidden" name="id" value="<?php echo $lista->id; ?>">
                    <label for="cedula">Cedula</label><br>
                    <input type="text" name="cedula" id="cedula" value="<?php echo $lista->cedula; ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $lista->nombre; ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="apellido">Apellido</label><br>
                    <input type="text" name="apellido" id="apellido" value="<?php echo $lista->apellido; ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label for="telefono">Telefono</label><br>
                    <input type="text" name="telefono" id="telefono" value="<?php echo $lista->telefono; ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="tipo">Tipo</label><br>
                    <input type="text" name="tipo" id="tipo" value="<?php echo $lista->tipo; ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label for="correo">Correo</label><br>
                    <input type="text" name="correo" id="correo" value="<?php echo $lista->correo; ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="mensaje">Mensaje</label><br>
                    <textarea name="mensaje" id="menssaje" cols="30" rows="10" disabled><?php echo $lista->mensaje; ?></textarea>
                </div>
                <div class="col-md-6">
                    <label for="respuesta">Respuesta</label><br>
                    <textarea name="respuesta" id="respuesta" cols="30" rows="10" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="fecha">Fecha</label><br>
                    <input type="text" name="fecha" id="fecha" value="<?php echo $lista->fecha; ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label for="hora">Hora</label><br>
                    <input type="text" name="hora" id="hora" value="<?php echo $lista->hora; ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="submit" name="enviar" id="enviar" value="Enviar" class="btn btn-primary">
                </div>

            </div>
        </form>
    </div>

    <?php require_once '../views/footer.php'; ?>