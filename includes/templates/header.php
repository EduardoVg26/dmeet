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
        <a class="nav-link" href="servicios.php">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.php">Nosotros</a>
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