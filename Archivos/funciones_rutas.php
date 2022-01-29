<?php 

// echo pathinfo('documento.txt', PATHINFO_BASENAME); despleiga nombre del archivo
// echo pathinfo('user/archivo/documento.txt', PATHINFO_DIRNAME); despliega ruta del archivo
// echo pathinfo('documento.txt', PATHINFO_EXTENSION); despliega extencion del archivo
echo pathinfo('documento.txt', PATHINFO_FILENAME); // despliega nombre completo del archivo

echo '<br>';

// Buscar archivos dentro de un directorio

$resultados = glob('*.php'); // Busca todos los archivos con extencion .php
               // ('a*.php'); = Archivos que empiezen con a y terminen con .php 
               // ('*.{php,html,css}', GLOB_BRACE); Todos los archovos que terminen con php, html y css
print_r($resultados);

echo '<br>';

// Conocer nombre base de un archivo y su extencion y elimina toda la ruta de los archivos

echo basename('carpeta1/carpeta2/archivo.php');
// echo basename('carpeta1/carpeta2/archivo.php', '.php'); El segundo parametro elimina la extencion del archivo archivo.php

echo '<br>';

// Devolve el directorio padre de la ruta
echo dirname('carpeta1/carpeta2/archivo.php');