<?php

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: /dmeet');
        # code...
    }

    require 'database.php';

    if (!empty($_POST['emailSession']) && !empty($_POST['passwordSession'])){
        $records = $conn->prepare('SELECT id, email, password FROM usuario Where email=:emailSession');
        $records->bindParam(':emailSession', $_POST['emailSession']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $messageSession = '';

        if (count($results) > 0 && password_verify($_POST['passwordSession'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            header('Location: /dmeet');
        } else{
            $messageSession = 'Lo sentimos, tus datos no coinciden';
        }
    }

?>


<?php include_once 'includes/templates/header.php'; ?>

	<div class="container">
		<div class="row align-items-center">


			<div class="col">
				
			</div>

			<div class="col">
				<!--Formulario de Inicio de Sesión-->
				<h3>Inicia Sesión</h3>
				<form action="sesion.php" method="post">
				  <div class="mb-3">
				    <label for="InputEmail" class="form-label">Correo Electronico</label>
				    <input name="emailSession" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
				  </div>
				  <div class="mb-3">
				    <label for="Password" class="form-label">Contraseña</label>
				    <input name="passwordSession" type="password" class="form-control" id="Password">
				  </div>
				  <div align="right">
				  	<button type="submit" class="btn btn-primary">Ingresar</button>
				  </div>
				  <?php if (!empty($messageSession)) : ?>
						<p><?= $messageSession ?></p>
					<?php endif; ?>
				</form>
			</div>
		</div>
	</div>

	<?php include_once 'includes/templates/footer.php'; ?>
