<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 col-xl-12">
            <h3>Denejos sus Peticiones, Quejas, Reclamos y Sujerencias</h3>
            <video onloadedmetadata="this.muted=true" autoplay loop class="video">
                <source src="videos/Cobrascol-video-4.mp4">
            </video>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="consulta">Enviar PQRS</h1>
            <form action="php/persistencia/pqrscont.php" class="pqrs" method="POST">
                <label for="">Cédula</label>
                <input type="text" placeholder="cédula" name="cedula" required><br>
                <label for="">Nombre</label>
                <input type="text" placeholder="Nombre" name="nombre" required><br>
                <label for="">Apellido</label>
                <input type="text" placeholder="Apellido" name="apellido" required><br>
                <label for="">Télefono</label>
                <input type="text" placeholder="Télefono" name="telefono" required><br>
                <label for="">Tipo de mensaje</label>
                <select id="tipo" name="tipo">
                    <option value="Peticion">Petición</option>
                    <option value="Queja">Queja</option>
                    <option value="Reclamo">Reclamo</option>
                    <option value="Sujerencia">Sugerencia</option>
                </select><br>
                <label for="">E-mail</label>
                <input type="email" placeholder="Email" name="correo" required><br>
                <label for="">Mensaje</label>
                <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensajes"></textarea>

                <div class="politicas">
                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <center>
                            <h5> Acepta la politica de tratamiento de datos</h5>
                        </center>
                    </a>
                    <input type="checkbox" name="politica" id="" class="check" required>
                </div>

                <input type="submit" class="btn" name="Enviar" value="Enviar">
            </form>
        </div>
        <div class="col-md-6">
            <h1 class="consulta">Consulte el estado de su Ticket</h1>
            <form action="php/persistencia/consultacont.php" class="form-buscar form-inline my-2 my-lg-0" method="Get">
                <input class=" mr-sm-2" type="search" placeholder="documento de identidad" name="ced" value="">
                <button class="btn btn-success " type="submit">Buscar</button>
            </form>
            <br><br><br>
            <img src="imagenes/Cobrascol-oficina.jpg" alt="" class="img-fluid">
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Politicas de privacidad y condiciones de uso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Tratamiento de datos</h4>
                <p>Las finalidades del tratamiento de datos son las siguientes:</p>
                <p>1). En desarrollo de las actividades propias de la entidad.</p>
                <p>2). Para realizar contactos tendientes a la medición del nivel de satisfacción de los servicios
                    que cobrascol LTDA presta a través de sus diferentes dependencias.</p>
                <p>3). Para realizar notificaciones e informes de trámites específicos o respuestas a consultas
                    realizadas por los ciudadanos, relacionadas con los temas que por su función cobrascol LTDA debe
                    realizar.</p>

                <h4>Condiciones de uso</h4>
                <p>Por medio del sitio web, cobrascol LTDA publica, entre otros, los temas y actividades que tienen
                    que ver con su misión, visión, objetivos y las funciones que le corresponden. Adicionalmente,
                    por este medio la entidad da a conocer información sobre políticas, planes, programas y
                    proyectos institucionales; trámites; servicios; indicadores de gestión; planes y programas;
                    publicaciones; normas; convocatorias; información presupuestal y de contratación; páginas
                    recomendadas; y, en general, información relacionada con la entidad, o de los programas que
                    desarrollan las entidades si es el caso. Adicionalmente, permite la opción de solicitar trámites
                    en línea y ofrece herramientas de interacción para los usuarios del sitio.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>