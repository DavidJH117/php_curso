<?php
// Funcion requerida para tranajar con sesiones
session_start();

// Comporbar si hay una sesion activa
if ($_SESSION) {
    $nombre = $_SESSION['nombre']; // se asigna el inicio de sesion a una variable
    echo "<h1> Hola, $nombre </h1>";
} else {
    echo 'No has iniciado sesion';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>

<body>
    <a href="cerrar.php">Cerrar sesion</a>
</body>

</html>