<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DMeet</title>
  <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Source+Sans+Pro:wght@300;400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="styleUser.css" />
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-light bg-faded d-flex flex-row">
    <!-- Brand -->
    <a class="navbar-brand logo" href="index.php">DMeet</a>
    <!-- Links -->
    <ul class="nav navbar-nav d-flex flex-row">
      <li class="nav-item">
        <a class="nav-link" href="eventos.html">Eventos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="servicios.html">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.html">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a href="registroUsuario.php" class="nav-link">
          <i class="fas fa-user"></i>
        </a>
      </li>
    </ul>
  </nav>

<div class="d-flex">
    <div id="sidebar-container" class="bg-primary">
        <div class="logoUser">
            <h4 class="font-weight-bold">Nombre Usuario</h4>
        </div>
        <div class="menu">
            <a href="#" class="d-block  p-3"><i class="fas fa-shopping-bag mr-2"></i>Compras</a>
            <a href="#" class="d-block  p-3"><i class="fas fa-calendar-day mr-2"></i>Eventos</a>
            <a href="#" class="d-block  p-3"><i class="fas fa-question mr-2"></i>Información</a>

        </div>
    </div>

    <div class="w-100">
        <div id="content">
            <div class="row">
                <div class="col-lg-9">
                    <h1 class="font-weight-bold mb-0">Bienvenido Usuario</h1>
                    <p class="col-lg-3">Esta es tu información más reciente</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-4 offset-md-2">
                    <h4 class="text-start">Lorem</h4>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi nisi atque ducimus officia qui cupiditate nostrum alias quos pariatur placeat illum eius quam quis reprehenderit culpa corrupti, quod ad! Similique? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, fugiat quasi. Perspiciatis obcaecati animi ipsum eveniet inventore cumque, laudantium rerum distinctio deleniti. Consequuntur a, magni doloremque facere quasi quas tempore.</p>
                </div>
                <div class="col-lg-8 m-4 offset-md-2">
                    <h4 class="text-start">Lorem</h4>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi nisi atque ducimus officia qui cupiditate nostrum alias quos pariatur placeat illum eius quam quis reprehenderit culpa corrupti, quod ad! Similique? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, fugiat quasi. Perspiciatis obcaecati animi ipsum eveniet inventore cumque, laudantium rerum distinctio deleniti. Consequuntur a, magni doloremque facere quasi quas tempore.</p>
                </div>
                <div class="col-lg-8 m-4 offset-md-2">
                    <h4 class="text-start">Lorem</h4>
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi nisi atque ducimus officia qui cupiditate nostrum alias quos pariatur placeat illum eius quam quis reprehenderit culpa corrupti, quod ad! Similique? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, fugiat quasi. Perspiciatis obcaecati animi ipsum eveniet inventore cumque, laudantium rerum distinctio deleniti. Consequuntur a, magni doloremque facere quasi quas tempore.</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Redes Sociales</h5>

            <ul class="list-unstyled redes">
              <li>
                <a href=""><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-youtube"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">DMeet</h5>

            <ul class="list-unstyled">
              <li>
                <a href="eventos.html" class="text-dark">Eventos</a>
              </li>
              <li>
                <a href="servicios.html" class="text-dark">Servicios</a>
              </li>
              <li>
                <a href="nosotros.html" class="text-dark">Nosotros</a>
              </li>
              <li>
                <a href="contacto.html" class="text-dark">Contacto</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div
        class="text-center p-3"
        style="background-color: #315599; color: #fff"
      >
        © 2020 Copyright: DMeet
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
      integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
  </body>
</html>