<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/69790e2c57.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
    	<div class="contenedor">
    		<h1 class="titulo">Foto: <?php if (!empty($foto['titulo'])) { // Si no esta vacio el titulo
          echo $foto['titulo']; // Se le asigna el titulo al h1
        } else { // si no
          echo $foto['imagen']; // Le pone el nombre de la imagen
        }?></h1>
    	</div>
    </header>

    <div class="contenedor">
        <div class="foto">
            <img src="imagenes/<?php echo $foto['imagen']; // Se trae la ruta de la imagen para mostrar la imagen?>" alt="">
            <p class="texto"><?php echo $foto['texto']; // Se trae el texto de la imagen ?></p>
            <a href="index.php" class="regresar"><i class="fas fa-chevron-left"></i> Regresar</a>
        </div>
    </div>

    <footer>
    	<p class="copyright">Galeria creada por David Juarez - Practica Udemy</p>
    </footer>

</body>
</html>
