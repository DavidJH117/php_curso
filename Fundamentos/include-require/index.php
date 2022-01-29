<?php

# Comandos para llamar a un archivo extra

function suma($numero1, $numero2){
  return $numero1 + $numero2;
}

require 'vista.php';

// Otra forma de llamar es usando: include 'vista.php'

# Require = Es un poco mas seguro ya que si no existe un archivo o esta mal escrita la ruta la pagina aparecerá en blanco
# Include = Si no se encuentra el archivo o esta mal escrita la direccion solo se depslegara una parte del documento

# include_one 'vista.php'; = Evita que se dupliquen los archivos llamados

?>
