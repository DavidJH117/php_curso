<?php
// Esta funcion es necesaria si se quiere tranajar con sesiones en la pagina
// tendra que ir en todas las paginas php que requieran una sesion activa
session_start();

// Se identifica el inicio de sesion por medio de un nombre
$_SESSION['nombre'] = 'Carlos';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <h1>Pagina de inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a la pagina 2</a>
</body>
</html>
