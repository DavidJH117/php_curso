<?php

require 'funciones.php';

// Se establece la conexion a la base por medio de la funcion creada
$conexion = conexion('galeria_practica', 'root', 'root');
if (!$conexion) {
  die();
}

// Toma el id de la imagen
$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) { // Si el usuario escribe algo que no sea un numero en la barra
  header('Location: index.php'); // Lo manda al index
}

// Prepara la base de datos para sacar el id de la foto
$statement = $conexion->prepare('SELECT * FROM fotos WHERE id=:id');
$statement -> execute(array(':id' => $id));

$foto = $statement->fetch();

if (!$foto) { // Si la foto no existe
  header('Location: index.php'); // Lo manda al index
}

require 'views/foto.view.php';
