<?php

# Son arreglos dentro de otros

$amigos = array(
  array('Alejandro', 21),
  array('David', 24),
  array('Cesar', 22)
);

# Para acceder a la informacion de este tipo de arreglos de hace lo siguiente

echo $amigos[0][0] . '<br>'; // El primer cero accede al primer arreglo y el segundo a los datos del mismo
echo $amigos[1][0] . '<br>';
echo $amigos[2][0] . '<br>';

# Minetras más arreglos se tengan detro de otros se pueden acceder a ellos agregando mas [] al echo

?>
