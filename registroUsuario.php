<?php
    require 'database.php';

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nombre']) && !empty($_POST['localidad']) && !empty($_POST['telefono']) && !empty($_POST['ocupacion'])) {
        $sql = "INSERT INTO usuario (nombre, email, password, localidad, telefono, ocupacion) VALUES (:nombre, :email, :password, :localidad, :telefono, :ocupacion)";
		$stmt = $conn->prepare($sql);	
		$stmt->bindParam(':nombre',$_POST['nombre']);
        $stmt->bindParam(':email',$_POST['email']);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$stmt->bindParam(':password',$password);
		$stmt->bindParam(':localidad',$_POST['localidad']);
        $stmt->bindParam(':telefono',$_POST['telefono']);
        $stmt->bindParam(':ocupacion',$_POST['ocupacion']);
        
        if ($stmt->execute()) {
            $message = 'Usuario creado correctamente.';
        }else {
            $message = 'Lo siento, ha ocurrido un error creando la contraseña.';
        }
    }
?> 
<?php
	require 'login.php';
?>

<!-- Linea para poner header -->
<?php include_once 'includes/templates/header.php'; ?>

	<div class="container">
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
				    	<input type="email" id="email" name="email" class="form-control" placeholder="Correo Electrónico">
				  	</div>
				  	<div class="mb-1">
				    	<label for="InputPassword" class="form-label"></label>
				    	<input type="password" name="password" class="form-control" id="InputPassword" placeholder="Contraseña">
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
				<h3>Inicia Sesión</h3>
				<form action="registroUsuario.php" method="post">
				  <div class="mb-3">
				    <label for="InputEmail" class="form-label">Correo Electronico</label>
				    <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
				  </div>
				  <div class="mb-3">
				    <label for="Password" class="form-label">Contraseña</label>
				    <input name="password" type="password" class="form-control" id="Password">
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

<!-- Linea para footer	 -->
	<?php include_once 'includes/templates/footer.php'; ?>
