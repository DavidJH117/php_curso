<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;500;700&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/69790e2c57.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilos.css">
	<title>Iniciar Sesión</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Iniciar Sesión</h1>
		<hr class="border">

		<!-- echo htmlspecialcharts($_SERVER['PHP_SELF']); protege el codigo -->
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login"> <!-- name="login" es el mismo del onclick del boton-->
			<div class="form-group">
				<i class="icono izquierda fas fa-user"></i><input type="text" class="usuario" name="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fas fa-lock"></i><input type="password" class="password_btn" name="password" placeholder="Contraseña">
				<i class="submit-btn fas fa-arrow-right" onclick="login.submit()"></i>
			</div>

			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		<!-- Area de texto inicio de sesion -->
		<p class="texto-registrate">
			¿Aún no tienes una cuenta?
			<a href="registro.php">Registrate</a>
		</p>
	</div>
</body>
</html>