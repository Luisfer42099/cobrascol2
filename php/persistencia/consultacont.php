<?php
require_once '../modelo/pqrs.php';

$activador = new pqrs();

if (isset($_GET)) {
    $cedula = isset($_GET['ced']) ? $_GET['ced'] : false;
    if ($cedula) {
        $activador->setCedula($cedula);
        $res = $activador->getAll();
    }
} else {
    header(('Location: ../../pqrs.html'));
}
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
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <h1>COBRASCOL</h1>
    <h3>Consulta de Tickets</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th scope="col">N° Ticket</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Respuesta</th>
                    </tr>
                    <?php while ($tik = mysqli_fetch_object($res)) { ?>
                        <tr>
                            <td>
                                <?= $tik->id ?>
                            </td>
                            <td>
                                <?= $tik->nombre ?>
                            </td>
                            <td>
                                <?= $tik->fecha ?>
                            </td>
                            <td>
                                <?= $tik->estado ?>
                            </td>
                            <td>
                                <?= $tik->respuesta ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <a href="../../index.php" class="reg btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
    <?php require_once '../../views/footer.php'; ?>