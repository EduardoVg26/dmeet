<?php

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

session_start();
$_SESSION['usuario'] = $usuario;

include ('database.php');

$consulta = "SELECT * FROM usuarios WHERE correo='$usuario' and contrasena = '$contrasena'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header('Location: index.php');
} else {
    ?>
    <?php
    include("sesion.php");
    ?>
    <h1>error en la autenticacion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
