<!-- Archivo que forma parte de la validacion de envio php-->
<?php

$errores = '';

if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];

  if (!empty($nombre)) { // Si el nombre no esta vacio (si hay un nombre)
    // $nombre = trim($nombre); Remueve caracteres especiales de ambos lados de una palabra
    // $nombre = htmlspecialchars($nombre); Da algo de seguridad al código
    // $nombre = stripslashes($nombre); Remueve los slashes

    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); // Remueve etiquetas inyectadas de html en una cadena de texto introducida
    echo "Tu nombre es: $nombre <br>";
  } else {
    $errores .= 'Por favor agrega un nombre <br>';
  }

  if (!empty($correo)) {
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
      $errores .= 'Por favor ingresa un correo valido <br>';
    } else {
      echo "Tu correo es: $correo";
    }

  } else {
    $errores .= 'Por favor ingresa un correo';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación</title>
    <style media="screen">
      .error{color: red};
    </style>
</head>
<body>
    <!--<form action="valida_envio.php" method="post"> Linea para validar envío a un archivo php aparte-->
    <form action="<?php echo htmlspecialchars($_Server ['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="correo" placeholder="Correo"> <!--en type es recomendable poner email para que no deje poner cualquier cosa-->

        <?php if (!empty($errores)): ?> <!--Forma de hacer un if de php en html (los dos puntos : es lo mismo que {})-->
          <div class="error"><?php echo $errores; ?></div> <!--Trae la variable errores al html-->
        <?php endif; ?>

        <input type="submit" name="submit">
    </form>
</body>
</html>
