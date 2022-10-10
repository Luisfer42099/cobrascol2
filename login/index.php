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
  <div class="container">
    <div class="row">
      <div>
        <a href="../index.php" class="btn btn-primary">Regresar</a>
      </div>
    </div>
  </div>
  <div class="login">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
            <h3>Inicio de sesion</h3>
          </center>
          <form action="persistencia/procesar.php" method="post">
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="staticEmail" placeholder="email@example.com" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="pass" class="form-control" id="inputPassword" required>
              </div>
            </div>
            <div class="mb-3 row">
              <input type="submit" value="Inicio" name="inicio" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="mb-3 row">
      <!--<a href="registro.php" class="btn btn-danger">Registro</a>-->
    </div>
  </div>

  <?php require_once '../views/footer.php'; ?>