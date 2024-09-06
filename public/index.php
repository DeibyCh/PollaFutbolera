<?php include '../templates/header.php'; ?>
<html>

<body>
<!--barra de sesion-->
<?php include '../templates/sesion.php'; ?>

<!--portada-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/football-field.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<!--barra de navegacion-->
<?php include '../templates/nav.php'; ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-5 col-md-6 mt-5">
        <img src="../img/img4.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-sm-5 offset-sm-2 col-md-6 p-3 offset-md-0">
        <div class="">
            <div class="body mt-4">
                <h5 class="card-title ">Sobre Nosotros</h5>
                <p class="card-text">
                  En Polla Futbolera, vivimos y respiramos el fútbol. Nuestra plataforma está diseñada para los apasionados del deporte rey, brindando un espacio donde los fanáticos pueden poner a prueba sus conocimientos y predicciones sobre los resultados de los partidos.
                </p>
                <p>
                  Aquí, los usuarios participan haciendo sus predicciones para los partidos de fútbol y suman puntos por cada acierto. A medida que avanza el torneo, los puntos se acumulan, llevando la emoción de cada juego más allá de la cancha y hasta el final de la competencia.
                </p> 
                <p>
                  Nuestro objetivo es crear una comunidad vibrante y competitiva, donde cada predicción cuenta y cada punto ganado acerca a los participantes a la gloria de ser los mejores pronosticadores de la temporada. ¿Tienes lo que se necesita para ser el campeón de la Polla Futbolera? Únete a nosotros y demuestra tu habilidad futbolística.
                </p>
                <a href="login1.php" class="btn btn-success">Iniciar sesión</a>
            </div>
        </div>
    </div>
  </div>
</div>

<!--formularios-->


</body>
</html>
<?php include '../templates/footer.php'; ?>
