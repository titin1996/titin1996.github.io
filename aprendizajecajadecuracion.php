<?php include("template/cabecera.php") ?>

<style>
  body {
    background-color: #f8f9fa;
  }

  .jumbotron {
    background-color: #f8f9fa;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 3rem;
    margin-bottom: 3rem;
  }

  .video-container {
    position: relative;
    width: 100%;
    height: 0;
    padding-top: 56.25%;
    /* 16:9 */
    overflow: hidden;
    margin-top: 3rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .video-container iframe,
  .video-container video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 1rem;
  }

  .list-group-item img {
    max-width: 50px;
    margin-right: 1rem;
    border-radius: 0.5rem;
  }

  .medium-image {
    max-width: 40%;
    height: auto;
    border-radius: 1rem;
    margin-bottom: 1.5rem;
  }
</style>
</head>

<body>
  <div class="container">
    <header class="text-center mt-5">
      <h1 class="display-3 text-primary center mt-5 font-weight-bold">CAJA DE CURACIÓN</h1>
    </header>

    <section class="mt-5">
      <div class="row">
        <div class="col-md-7">
          <div class="jumbotron">
            <h2 class="mb-4">Explicación y uso</h2>
            <img src="img/caja_curacion.png" alt="Imagen Mediana" class="medium-image">
            <p class="lead">Curación de todo tipo de heridas y otros procedimientos. </p>
            <p>Utilizado en procedimiento, matronas y cirugia menor.</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="jumbotron">
            <h2 class="mb-4">Materiales</h2>
            <ul class="list-group">
              <li class="list-group-item d-flex align-items-center">
                <img src="img/pinzaanatomica.jpg" alt="Elemento 1">
                Pinza Anatómica
              </li>
              <li class="list-group-item d-flex align-items-center">
                <img src="img/tijeraquirurgica.png" alt="Elemento 2">
                Tijera Quirúrjica
              </li>
              <li class="list-group-item d-flex align-items-center">
                <img src="img/portaagujamayo.jpg" alt="Elemento 3">
                Porta Aguja Mayo
              </li>
              <li class="list-group-item d-flex align-items-center">
                <img src="img/gasas.jpeg" alt="Elemento 3">
                3 Gasas
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>

    <section class="mt-5">
      <div class="video-container">
        <video controls>
          <source src="video/Empaquetado de Instrumental quirúrgico 28_08_21.mp4" type="video/mp4">
          Tu navegador no admite el elemento video.
        </video>
      </div>
    </section>
  </div>





  <?php include("template/pie.php") ?>