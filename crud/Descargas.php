<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
  header('Location: ../login/index.php');
}
require_once 'persistencia.php';
$activador = new Admin();

if (isset($_GET['id'])) {
  $id = isset($_GET['id']) ? $_GET['id'] : false;
  if ($id != false) {
    $delete = $activador->delete($id);
    if ($delete) {
      echo '<script type="text/javascript">
              alert("Datos eliminados con exito.");
              window.location.href="index.php";
              </script>';
    } else {
      echo '<script type="text/javascript">
              alert("Ha ocurrido un error.");
              window.location.href="index.php";
              </script>';
    }
  } else {
  }
} else {
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
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <h3>Expertos en Creditos y Cobranzas.</h3>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="controles">
          <a href="../login/cerrar.php" class="btn btn-primary">Cerrar sesion</a>
          <a href="index.php" class="btn btn-primary">PQR'S</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Lista de Descargas</h2>
        <?php $datos = $activador->getDownloads(); ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Fecha</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_object($datos)) {
              $id = $row->id;
              $nombre = $row->Nombre;
              $email = $row->Email;
              $fecha = $row->Fecha;
            ?>
              <tr>
                <th><?php echo $nombre; ?></th>
                <td><?php echo $email; ?></td>
                <td><?php echo $fecha; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php require_once '../views/footer.php'; ?>