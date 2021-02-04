<?php
    require 'database.php';

    $message = '';

    if (!empty($_POST['emailSignup']) && !empty($_POST['passwordSignup']) && !empty($_POST['nombre']) && !empty($_POST['localidad']) && !empty($_POST['telefono']) && !empty($_POST['ocupacion'])) {
		$sql = "INSERT INTO usuario (nombre, email, password, localidad, telefono, ocupacion) VALUES (:nombre, :email, :password, :localidad, :telefono, :ocupacion)";
		$stmt = $conn->prepare($sql);	

		$stmt->bindParam(':nombre',$_POST['nombre']);
		$stmt->bindParam(':email',$_POST['emailSignup']);
		// $password = password_hash($_POST['passwordSignup'], PASSWORD_BCRYPT);
		$password = crypt($_POST['passwordSignup'], '$2a$07$7sd3164587A12489dmeetd8f8$');
		$stmt->bindParam(':password',$password);
		$stmt->bindParam(':localidad',$_POST['localidad']);
        $stmt->bindParam(':telefono',$_POST['telefono']);
        $stmt->bindParam(':ocupacion',$_POST['ocupacion']);
        
        if ($stmt->execute()) {
            $message = 'Usuario creado correctamente.';
        }else {
            $message = 'Lo siento, ha ocurrido un error creando el usuario.';
        }
	}
	
?> 

<?php
  session_start();

  if(isset($_SESSION['user_id'])){
    header('Location: /dmeet');
  }

  require 'database.php';

  if(!empty($_POST['emailSession']) && !empty($_POST['passwordSession'])){
    $records = $conn->prepare('SELECT id, email, password FROM usuario WHERE email=:emailSession');
    $records->bindParam(':emailSession', $_POST['emailSession']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
	// print_r($results);
	$messageSession = '';
	
	// print_r($results);

	if (is_array($results)) {

		// echo 'Es un array';

		$password = crypt($_POST['passwordSession'], '$2a$07$7sd3164587A12489dmeetd8f8$');

		// var_dump($results);
		// echo $password;

		if ($password == $results['password']) {

			$_SESSION['user_id'] = $results['id'];
			header('Location: /dmeet');

		} else {
			$messageSession = 'Lo siento, los datos son incorrectos.';
		}

	} else {

		$messageSession = 'Lo siento, los datos son incorrectos.';

	}

    // if(count($results) > 0 && password_verify($_POST['passwordSession'], $results['password'])){
    //   $_SESSION['user_id'] = $results['id'];
    //   header('Location: /dmeet');
    // } else {
    //   $messageSession = 'Lo siento, los datos son incorrectos.';
    // }
  }

?>

<!-- Linea para poner header -->
<?php include_once 'includes/templates/header.php'; ?>

	<div class="container" style="margin: 50px auto;">
		<div class="row align-items-center">
			<div class="col">
				<!--Formulario Registro-->
				<div class="input-group mb-3">
				<h3>Registro </h3>
				
				  	<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Usuario">
				  	<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Como</button>
				  	<ul class="dropdown-menu dropdown-menu-end">
				    	<li><a class="dropdown-item" href="#">Usuario</a></li>
				    	
				    	<li><a class="dropdown-item" href="#">Ponente</a></li>
				    	
				    	<li><a class="dropdown-item" href="#">Maestro</a></li>
				    	
				    	
				  	</ul>
				</div>

				<form action="registroUsuario.php" method="post">
				  	<div class="mb-1">
				    	<label for="nombre" class="form-label"></label>
				    	<input type="form-text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo">
				   		
				  	</div>
					  <div class="mb-1">
				    	<label for="CorreoElectronico" class="form-label"></label>
				    	<input type="email" id="email" name="emailSignup" class="form-control" placeholder="Correo Electrónico">
				  	</div>
				  	<div class="mb-1">
				    	<label for="InputPassword" class="form-label"></label>
				    	<input type="password" name="passwordSignup" class="form-control" id="InputPassword" placeholder="Contraseña">
				  	</div>

				  	<div class="mb-1">
				    	<label for="Localidad" class="form-label"></label>
				    	<input type="form-text" id="Localidad" name="localidad" class="form-control" placeholder="Localidad">
				  	</div>
				  	<div class="mb-1">
				    	<label for="Telefono" class="form-label"></label>
				    	<input type="form-text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono">
				  	</div>
				  	<div class="mb-1">
				    	<label for="Ocupación" class="form-label"></label>
				    	<input type="form-text" id="Ocupación" name="ocupacion" class="form-control" placeholder="Ocupación">
				  	</div>

					<div class="mb-3" align="right">
				  		<button type="submit" class="btn btn-primary">Registrar</button>
				  	</div>
					</form>
					<?php if(!empty($message)): ?>
						<p><?= $message ?></p>
					<?php endif; ?>
			</div>

			<div class="col">
				
			</div>

			<div class="col">
				<!--Formulario de Inicio de Sesión-->
				<?#php require 'partials/header.php' ?>
				<h3>Inicia Sesión</h3>
				<form action="registroUsuario.php" method="post">
				  <div class="mb-3">
				    <label for="InputEmail" class="form-label">Correo Electronico</label>
				    <input name="emailSession" type="email" class="form-control" aria-describedby="emailHelp">
				  </div>
				  <div class="mb-3">
				    <label for="Password" class="form-label">Contraseña</label>
				    <input name="passwordSession" type="password" class="form-control">
				  </div>
				  <div align="right">
				  	<button type="submit" class="btn btn-primary">Ingresar</button>
				  </div>
				  <?php if (!empty($messageSession)) : ?>
						<p><?= $messageSession ?></p>
					<?php endif; ?>
					
					<?php if (!empty($mensajeSesion)) : ?>
						<p><?= $mensajeSesion ?></p>
					<?php endif; ?>
				</form>
			</div>
		</div>
	</div>

<!-- Linea para footer	 -->
	<?php include_once 'includes/templates/footer.php'; ?>
