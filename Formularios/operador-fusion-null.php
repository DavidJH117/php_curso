<?php

// Esto es un if pero de una linea ? = si es verdadero : = si no es verdadero
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

// if (isset($_GET['nombre'])) {
//  $nombre = $_GET['nombre'];
// } else {
//  $nombre = 'Annimo';
// } es lo mismo que lo de arriba

// Una forma simplificada de lo anterior es la siguente
$nombre = $_GET['nombre'] ?? 'Anonimo';

echo $nombre;
