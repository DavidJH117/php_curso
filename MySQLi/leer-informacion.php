<?php

$conexion = new mysqli('localhost', 'root', 'root', 'prueba_datos');

if ($conexion->connect_errno) {
  die('Hubo un error en el servidor');
} else {
  // Se guarda la sentencia sql en una variable
  $sql = 'SELECT * FROM usuarios';
  // Se ejecuta la sentencia y se guarda en una variable
  $resultado = $conexion->query($sql);

  // Comprobar si la sentencia devolvio resultados
  // echo $resultado->num_rows;

  if ($resultado->num_rows) {
    // $resultado->fetch_assoc() muestra una row

    // Traer los datos
    // Mientras haya resultados se ejecuta el ciclo
    while ($fila = $resultado->fetch_assoc()) {
      echo $fila['id'].'.- '.$fila['nombre'].' '.$fila['edad'].' años'.'<br>';
    }
  } else {
    echo 'No hay datos';
  }
}
