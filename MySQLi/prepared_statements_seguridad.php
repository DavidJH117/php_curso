<?php

$conexion = new mysqli('localhost','root', 'root', 'prueba_datos');

if ($conexion->connect_errno) {
  die('Hubo un problema con el server');
} else {

  // Se prepara la sentencia sql para su ejecucion
  $statement = $conexion->prepare("INSERT INTO usuarios(ID, nombre, edad) VALUES(?,?,?)"); // Se ponen los valores en ?

  // Indicar los valores que queremos meter
  // Reemplazar los placeholder ? con los valores que queremos usar
      // Una letra por placeholder que tengamos
      // s = string
      // i = integer
      // d = double
  $statement->bind_param('ssi', $id, $nombre, $edad);
  $id = NULL;

  // Tomar los datos de la url
  // Primero se comprueba que haya datos
  if (isset($_GET['nombre']) && isset($_GET['edad'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
  }

  // Añadir datos por URL -> Al final de la url agregar: ?nombre=Ivar&edad=28

  // Ejecutar la sentencia
  $statement->execute();

  // Informar que se añadieron las rows
  if ($conexion->affected_rows >= 1) {
    echo 'Filas agregadas: ' . $conexion->affected_rows;
  } else {
    echo 'No se agregó nada';
  }


}
