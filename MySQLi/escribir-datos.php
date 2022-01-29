<?php

$conexion = new mysqli('localhost', 'root', 'root', 'prueba_datos');

if ($conexion->connect_errno) {
  die('Hubo un problema con el servidor');
} else {
  // Se prepara la sentencia para insertar valores con las columnas
  $sql = "INSERT INTO usuarios(id, nombre, edad) VALUES(null, 'Marcus', 32)";
  // Se ejecuta la sentencia
  $conexion->query($sql);

  // Informar al usuario que se agregaron datos
  if ($conexion->affected_rows >= 1) {
    echo 'Filas agregadas: ' . $conexion->affected_rows;
  }
}
