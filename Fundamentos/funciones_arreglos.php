<?php

# extract() = Extrae los datos de unarreglo convirtiendolos en variables

$amigo = array('nombre' => 'Dominic', 'telefono' => '11790876', 'edad' => 20);

extract($amigo);

echo $telefono;

echo '<br>';

# array_pop() = extrae el último elemento de un arreglo

$juegos = array(
  'Halo', 'Geras of war', 'Bioshock', 'Assassins creed', 'Prince of persia'
);

$ultimo_juego = array_pop($juegos); // Extrae el ultiom item del arreglo y lo asigna a una variable

foreach ($juegos as $juego) {
  echo $juego . '<br>';
}

echo 'Este fue el juego que se extrajo: ' . $ultimo_juego;

echo '<br>';

# join() = Despliega todos los elementos de un array de una forma corrida

echo join(' - ',$juegos); // el ' - ' es el guion que se despliega en la pagina

echo '<br>';

# count() = Cuenta el numero de items que hay en un arreglo
# sort() = Ordena los elementos de un array de manera acendente
# rsort() = Ordena los elementos de un array de manera decendente

# array_reverse() = Despliega los items de un array de manera inversa

$bandas = array('Blur', 'Gorillaz', 'Oasis', 'Nirvana', 'The Beatles');

$semana_reverse = array_reverse($bandas);

echo join(', ', $semana_reverse);


?>
