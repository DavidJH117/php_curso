<?php

// Se establece la conexion a la base de datos
try{
  $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
} catch (PDOexception $e){
  echo "ERROR " . $e->getMessage();
  die();
}

// Establecer el númeor de paginas
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
// establecer los post por pagina
$postPorPagina = 5;

// traer los post de 5 en 5
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

// traer los post desde la base de datos
// SQL_CALC_FOUND_ROWS calcula todos los registros que se estan trayendo
$articulos = $conexion->prepare("
  SELECT SQL_CALC_FOUND_ROWS * FROM articulos
  LIMIT $inicio, $postPorPagina
");

// Ejecutar la consulta
$articulos -> execute();
$articulos = $articulos->fetchAll();

// Comporbar si esta trayendo los datos
// print_r($articulos);

// redirigir a pagina si no hay articulos
if (!$articulos) {
  header('Location: index.php');
}

// Sacar el numero de articulos
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

// echo $totalArticulos;

// Numero de paginas
$numeroPaginas = ceil($totalArticulos/$postPorPagina);

// echo $numeroPaginas;

require 'index.view.php';

?>
