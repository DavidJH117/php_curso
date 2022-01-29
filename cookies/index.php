<?php
# Una cookie es un archivo que guarda las configuraciones establecidas por un usuario en la pagina
// En una cookie solo se pueden guardar 4 megabytes de texto

# Funcion para establecer cookies
// Los dos primeros parametros son las configuraciones dadas por defecto
// time() marca el tiempo real + el tiempo de la existencia de la cookie
// si se cambia por un menos ( - ) la cookie se elimina
// + 60 * 60 * 24 * 30 son el tiempo que la cookie estará activa 
// segundos * minutos * horas * dias 
// '/' Lugar donde se guardará la cookie, en este caso en todo el dominio
setcookie('font-size','40px', time() - 60 * 60 * 24 * 30, '/');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookie seteada</h1>
</body>
</html>