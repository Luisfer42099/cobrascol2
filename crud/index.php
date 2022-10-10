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
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Lista de PQR's</h2>
        <?php $datos = $activador->getDatos(); ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Tipo</th>
              <th scope="col">Fecha</th>
              <th scope="col">Estado</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_object($datos)) {
              $id = $row->id;
              $nombre = $row->nombre;
              $apellido = $row->apellido;
              $tipo = $row->tipo;
              $fecha = $row->fecha;
              $estado = $row->estado;
            ?>
              <tr>
                <th><?php echo $nombre; ?></th>
                <td><?php echo $apellido; ?></td>
                <td><?php echo $tipo; ?></td>
                <td><?php echo $fecha; ?></td>
                <td><?php echo $estado; ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $id; ?>" class="edit" title="Editar" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                      <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                    </svg></a>
                  <a href="index.php?id=<?php echo $id; ?>" class="delete" title="Eliminar" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php require_once '../views/footer.php'; ?>