<?php

// conexion (direccion, usuario, contraseña, base de datos)
$conexion = new mysqli('localhost', 'root', 'root', 'prueba_datos');

// echo $conexion->connect_errno; // Si esto da un 0 significa que se conecto correctamente

// Comprobar si hubo un error de conexion

// Si hubo un error
if ($conexion->connect_errno) {
  // die() para el servidor si hubo un error
  die('Hubo un problema en el servido');
} else { // Si no
  echo "Bienvenido";
}
