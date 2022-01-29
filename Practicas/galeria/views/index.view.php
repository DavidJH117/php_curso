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
    		<h1 class="titulo">Mi galeria en PHP</h1>
    	</div>
    </header>

    <section class="fotos">
    	<div class="contenedor">
        <!-- Despliegue de las fotos -->
    		<?php foreach($fotos as $foto):?>
          <div class="thumb">
            <a href="foto.php?id=<?php echo $foto['id']; ?>">
              <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
            </a>
          </div>
        <?php endforeach;?>

    		<div class="paginacion">
          <!-- se asigna la paginacion -->
          <?php if($pagina_actual > 1): ?>
            <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fas fa-long-arrow-alt-left"></i>  Pagina anterior</a>
          <?php endif ?>

          <?php if($total_paginas != $pagina_actual): ?>
            <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina siguente  <i class="fas fa-long-arrow-alt-right"></i></a>
          <?php endif ?>

    		<!--	<a href="#" class="izquierda"><i class="fas fa-long-arrow-alt-left"></i>  Pagina anterior</a>
    			<a href="#" class="derecha">Pagina siguente  <i class="fas fa-long-arrow-alt-right"></i></a> -->
    		</div>

    	</div>
    </section>

    <footer>
    	<p class="copyright">Galeria creada por David Juarez - Practica Udemy</p>
    </footer>

</body>
</html>
