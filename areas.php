<?php
  $conexion = mysqli_connect('localhost', 'root', '', 'dmeet_usuarios');
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DMeet</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Source+Sans+Pro:wght@300;400;700&display=swap"
    rel="stylesheet" />
    <script src="js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="styleUser.css" />

</head>
 
<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-faded">
    <!-- Brand -->
    <a class="navbar-brand logo" href="index.php">DMeet</a>
    <!-- Links -->
    <ul class="nav navbar-nav d-flex flex-row">
      <li class="nav-item ">
        <a class="nav-link" href="eventos.php">Eventos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="servicios.html">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vistas/nosotros/index.html">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>

      <li class="nav-item dropdown">
        <?php if (!empty($user)): ?>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="perfilUser.php">Perfil</a>
              <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
            </div>
        <?php else: ?>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="registroUsuario.php">Iniciar Sesión</a>
          </div>
        <?php endif; ?>
      </li>
    </ul>
  </nav>



    
  
<div class="d-flex">
      <div id="sidebar-container" class="bg-primary">
        <div class="til">
          <h4 class="text-light">Menu</h4>
        </div>
        <div class="menu">
          <a href="#" class="d-block text-light lead p-3">Tablero</a>
          <a href="#" class="d-block text-light lead p-3">Administración</a>
          <a href="#" class="d-block text-light lead p-3">Ventas</a>
          <a href="#" class="d-block text-light lead p-3">Reclutamineto</a>
          <a href="#" class="d-block text-light lead p-3">Desarrollo</a>
          <a href="#" class="d-block text-light lead p-3">Estadisticas</a>
          <a href="#" class="d-block text-light lead p-3">Configuración</a>
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
            <div class="container">
              <table class="table table-light table-striped align-middle">
                <thead>
                  <h1>Registros Pendientes</h1>
                  <tr class="table-dark">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ocupación</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono/th></th>
                    <th scope="col">Localidad</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <?php
                  $sql = "SELECT * from registro_maestro";
                  $result = mysqli_query($conexion,$sql);
                
                  while($mostrar = mysqli_fetch_array($result)){
                    ?>
                  
                <tbody>
                  <tr>
                    <th><?php echo $mostrar['id'] ?></th>
                    <th><?php echo $mostrar['nombre'] ?></th>
                    <th><?php echo $mostrar['ocupacion'] ?></th>
                    <th><?php echo $mostrar['descripcion'] ?></th>
                    <th><?php echo $mostrar['correo'] ?></th>
                    <th><?php echo $mostrar['telefono'] ?></th>
                    <th><?php echo $mostrar['localidad'] ?></th>
                  </tr>
                  <?php
                  }
                  ?>
                  
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>

<!---------Footer------------------------------------------>
      <!-- Copyright -->
      <div
        class="text-center p-3"
        style="background-color: #315599; color: #fff"
      >
        © 2020 Copyright: DMeet
      </div>
      <!-- Copyright -->
    </footer>

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