<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>COBRASCOL LTDA. Expertos en credito y cobranza.</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../logos/css/fontello.css">
  <link rel="stylesheet" href="../css/miestilo.css">
  <link rel="stylesheet" href="../css/fontello.css">
</head>

<body>
  <div class="social-bar">
    <a href="https://www.facebook.com/cobrascol.ltda2" class="icon icon-facebook" target="_blank"></a>
    <a href="https://www.instagram.com/cobrascolltda/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
  </div>
  
  <header class="encabezado" role="l-triangle-bottom" id="encabezado">
    <div id="logo">
      <a href="index.html"><img src="../imagenes/Fondoarreglado.png" alt="Logo del sitio" class="logo"></a>
      <a href="index.html">cobrascol ltda</a>
      <h3>Expertos en Creditos y Cobranzas.</h3>
    </div>
    <!--Finaliza container encabezado -->
  </header>
  
  <div class="login">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center><h3>Registro de usuarios</h3></center>
          <form action="persistencia/procesar.php" method="post">
            <div class="mb-3 row">
              <label for="staticName" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="staticName" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="emailr" class="form-control" id="staticEmail" placeholder="email@example.com" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="passr" class="form-control" id="inputPassword" required>
              </div>
            </div>
            <div class="mb-3 row">
                <input type="submit" value="registro" name="registro" class="boton">
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>


  <div class="container-footer">
  <footer class="footer-index piedepagina p-y-1">
    <div class="container">
      <p>Copyright © 2020 Cobrascol Ltda - Todos los derechos reservados</p>
    </div>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>