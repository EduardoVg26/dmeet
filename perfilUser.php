<?php

if (!isset($_SESSION)) {
   session_start();
}
    require 'database.php';

    if (isset($_SESSION['user_id'])) {

        $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
            $user = $results;
        }
    }

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
        <div class="logoUser">
            <h4 class="font-weight-bold"><?= $user['email']?></h4>
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
                    <h1 class="font-weight-bold mb-0">Bienvenido <?= $user['email']?></h1>
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


<!-- Linea para footer	 -->
<?php include_once 'includes/templates/footer.php'; ?>