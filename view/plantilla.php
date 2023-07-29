<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Group Molina</title>

    <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/8ed44893fd.js"
      crossorigin="anonymous"
    ></script>
    <?php
      if(isset($_GET["pagina"])){
        if($_GET["pagina"] == "inicio"){
          echo '<link rel="stylesheet" href="./css/styles.css" />';
        }elseif($_GET["pagina"] == "nosotros"){ 
          echo '<link rel="stylesheet" href="./css/nosotros.css" />';
        }elseif($_GET["pagina"] == "servicios"){ 
          echo '<link rel="stylesheet" href="./css/servicios.css" />';
        }elseif($_GET["pagina"] == "contacto"){ 
          echo '<link rel="stylesheet" href="./css/contacto.css" />';
        }elseif($_GET["pagina"] == "clientes"){ 
          echo '<link rel="stylesheet" href="./css/clientes.css" />';
        }else{
          echo '<link rel="stylesheet" href="./css/styles.css" />';
        }
        

      }else {
        echo '<link rel="stylesheet" href="css/styles.css" />';
      }
    ?>

  </head>
  <body>
    <header class="container">
      <!-- nav -->
      <nav class="navbar navbar-expand-lg fixed-top p-0 bg-white">
        <div class="container-fluid p-0">
          <a class="navbar-brand ms-3 ms-sm-5 me-sm-5" href="#" style="width: 100px">
            <img src="./img/Logo.png" alt="" class="img-fluid w-100" />
          </a>
          <button class="navbar-toggler me-3 ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end bg-danger text-center" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-danger">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav position-relative justify-content-end flex-grow-1 fw-medium me-2" id="navbar-list">
              <?php if (isset($_GET["pagina"])): ?>
				    <?php if ($_GET["pagina"] == "inicio"): ?>
                        <li class="nav-item me-4 list-nav">
                            <a class="nav-link text-white fs-5" aria-current="page" href="inicio">Inicio</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item me-4 list-nav">
                            <a class="nav-link text-white fs-5"aria-current="page" href="inicio">Inicio</a>
                        </li>
                    <?php endif ?>
                    <?php if ($_GET["pagina"] == "nosotros"): ?>
                        <li class="nav-item me-4 h-100 list-nav">
                            <a class="nav-link text-white fs-5" href="nosotros">Nosotros</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item me-4 h-100 list-nav">
                            <a class="nav-link text-white fs-5" href="nosotros">Nosotros</a>
                        </li>
                    <?php endif ?>
                    <?php if ($_GET["pagina"] == "servicios"): ?>
                        <li class="nav-item me-4 h-100 list-nav">
                            <a class="nav-link text-white fs-5" href="servicios">Servicios</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item me-4 h-100 list-nav">
                            <a class="nav-link text-white fs-5" href="servicios">Servicios</a>
                        </li>
                    <?php endif ?>
                    <?php if ($_GET["pagina"] == "clientes"): ?>
                        <li class="nav-item me-4 h-100 list-nav">
                            <a class="nav-link text-white fs-5" href="clientes">Clientes</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item me-4 h-100 list-nav">
                            <a class="nav-link text-white fs-5" href="clientes">Clientes</a>
                        </li>
                    <?php endif ?>
                    <?php if ($_GET["pagina"] == "contacto"): ?>
                        <li class="nav-item me-4 h-100 list-nav">
                            <a class="nav-link text-white fs-5" href="contacto">Contacto</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item me-4 h-100 list-nav">
                            <a class="nav-link text-white fs-5" href="contacto">Contacto</a>
                        </li>
                    <?php endif ?>
                <?php else: ?>
                    <li class="nav-item me-4 list-nav">
                        <a class="nav-link text-white fs-5" aria-current="page" href="inicio">Inicio</a>
                    </li>
                    <li class="nav-item me-4 h-100 list-nav">
                        <a class="nav-link text-white fs-5" href="nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item me-4 h-100 list-nav">
                        <a class="nav-link text-white fs-5" href="servicios">Servicios</a>
                    </li>
                    <li class="nav-item me-4 h-100 list-nav">
                        <a class="nav-link text-white fs-5" href="clientes">Clientes</a>
                    </li>
                    <li class="nav-item me-4 h-100 list-nav">
                        <a class="nav-link text-white fs-5" href="contacto">Contacto</a>
                    </li>
                <?php endif ?>
              
        
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <?php 
      if(isset($_GET["pagina"])){
        if($_GET["pagina"] == "inicio" ||
          $_GET["pagina"] == "nosotros" ||
          $_GET["pagina"] == "clientes" ||
          $_GET["pagina"] == "servicios" ||
          $_GET["pagina"] == "contacto"){
          include "paginas/".$_GET["pagina"].".php";
        }else{
          include "paginas/error404.php";
        }
      }else{
        include "paginas/inicio.php";
      }
      ?>

    
    <div class="container-fluid bg-black text-white">
      <footer class="pt-5 pb-1">
        <div class="row d">
          <div class="col-12 col-md-6 col-lg-4 px-5 mb-3">
            <img
              src="./img/Logo.png"
              alt=""
              srcset=""
              class="img-fluid w-25 d-flex ms-auto me-auto mb-2"
            />
            <p class="text-center">
              Somos una empresa dedicada al transporte de carga, especializados
              en brindar soluciones logísticas confiables y eficientes para tus
              envíos. Nuestra experiecnia compromiso nos convierten en tu socio
              ideal para el transporte de carga seca, materiales peligrosos y
              carga refrigerada.
            </p>
          </div>

          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <h3>Contacto</h3>
            <ul class="nav flex-column mt-5">
              <li class="nav-item mb-2">
                <p>
                  <i class="bi bi-map fs-4 me-2"></i> Urb. El Asesor II Etapa
                  2do. Piso, Lima - Santa Anita
                </p>
              </li>
              <li class="nav-item mb-2">
                <p>
                  <i class="bi bi-envelope-at fs-4 me-2"></i>
                  angroupmolina@gmail.com
                </p>
              </li>
              <li class="nav-item mb-2">
                <p>
                  <i class="bi bi-telephone-inbound fs-4 me-2"></i> +51 940 489
                  213 / +51 992 777 686
                </p>
              </li>
            </ul>
          </div>

          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <h3>Redes Sociales</h3>
            <ul class="nav flex-row justify-content-evenly">
              <li class="nav-item mb-2">
                <a href="#" class="link-light text-success fs-1"
                  ><i class="bi bi-whatsapp"></i
                ></a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="link-info text-primary fs-1"
                  ><i class="bi bi-facebook"></i
                ></a>
              </li>
              <!-- <li class="nav-item mb-2">
                <a href="#" class="link-light text-danger fs-1"
                  ><i class="bi bi-tiktok"></i
                ></a>
              </li> -->
              <li class="nav-item mb-2">
                <a href="#" class="link-light text-warning fs-1"
                  ><i class="bi bi-instagram"></i
                ></a>
              </li>
            <!-- </ul>
            <h3>Libro de reclamaciones</h3>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="link-dark text-white fs-1"
                  ><i class="bi bi-book-fill"></i
                ></a>
              </li>
            </ul> -->
          </div>
        </div>

        <div class="text-center p-1 mt-2 border-top">
          <p class="">© 2023 Group Molina, E.I.R.L. All rights reserved.</p>
        </div>
      </footer>
    </div>
      <?php 
      if($_GET["pagina"] == "contacto"){ 
        echo '<script src="js/contacto.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
      }else if($_GET["pagina"] == "inicio"){ 
        echo ' <script>AOS.init();</script>';
      }
      ?>
       <script src="script.js?v=1.0"></script>
  </body>
</html>
