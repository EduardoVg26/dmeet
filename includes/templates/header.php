<?php
  session_start();

  require 'database.php';
  
  if (isset($_SESSION['user_id'])) {

    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
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
  <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Source+Sans+Pro:wght@300;400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
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
          <span id="sesion" style="font-size: .8rem;">Iniciar </br> Sesión</span>
          <i class="fas fa-user"></i>
        </a>
      </li>
    </ul>
  </nav>