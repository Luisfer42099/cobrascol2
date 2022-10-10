<?php require_once 'views/header.php'; ?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="imagenes/Fondoarreglado.png" alt="Logo cobrascol"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Nuestros-Clientes">Nuestros Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Nuestros-Servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contacto">Contactenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#PQRS">PQRS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login/index.php">Iniciar</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagenes/Cobrascol-personal.jpeg" class="d-block w-100 img-fluid imagen" alt="Personal cobrascol">
            <div class="carousel-caption d-none d-md-block">
                <h5>Personal Cobascol</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imagenes/cobrascol-personal2.jpeg" class="d-block w-100 img-fluid imagen" alt="Personal Cobrascol">
            <div class="carousel-caption d-none d-md-block">
                <h5>Personal Cobrascol</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imagenes/cobrascol-personal3.jpeg" class="d-block w-100 img-fluid imagen" alt="Personal Cobrascol">
            <div class="carousel-caption d-none d-md-block">
                <h5>Personal Cobrascol</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div id="Nosotros" class="Nosotros">    
    <?php require_once 'views/Nosotros.php'; ?>
</div>

<div id="Nuestros-Clientes" class="Nuestros-Clientes">    
    <?php require_once 'views/Clientes.php'; ?>
</div>

<div id="Nuestros-Servicios" class="Nuestros-Servicios">    
    <?php require_once 'views/Servicios.php'; ?>
</div>

<div id="Contacto" class="Contacto">    
    <?php require_once 'views/Contacto.php'; ?>
</div>

<div id="PQRS" class="PQRS">
    <?php require_once 'views/pqrs.php'; ?>
</div>
<?php require_once 'views/footer.php'; ?>