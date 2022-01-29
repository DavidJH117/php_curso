<?php

require 'funciones.php';
$fotos_por_pagina = 8;

// Se establecen la paginacion
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$conexion = conexion('galeria_practica', 'root', 'root'); // Se accede a la base de datos

if (!$conexion) {
  die(); // Si la conexion falla se detiene la ejecucion de la pagina
}

// Prepara la base de datos
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$statement -> execute(); // Ejecuta la sentencia

$fotos = $statement->fetchAll(); // Distribuye las imagenes

if (!$fotos) {
  header ('Location: index.php'); // Se recomeinda que se haga una pagina de error ya que se enviara a esa pagina en caso de que hay un error con la base
}

// print_r($fotos); Comprobar si se trajeron las fotos

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas"); // Trae todas la filas de la base
$statement -> execute(); // Se ejecuta la sentencia
$total_post = $statement->fetch()['total_filas'];

// Calular el total de paginas
$total_paginas = ($total_post / $fotos_por_pagina);
$total_paginas = ceil($total_paginas);


require 'views/index.view.php';
