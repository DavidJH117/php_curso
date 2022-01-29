<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
	<title>Paginación</title>
</head>
<body>
	<div class="contenedor">
		<h1>Articulos</h1>
		<section class="articulos">
			<ul>
				<!-- Se agregan los articulos a la vista -->
				<?php foreach ($articulos as $articulo): ?>
					<li><?php echo $articulo['id'] . '.- ' . $articulo['articulo'] ?></li>
				<?php endforeach; ?>
			</ul>
		</section>
		<section class="paginacion">
			<ul>
				<!-- Se agrega la paginacion -->

				<!-- Si la pagina actual es la 1 se desabilita el boton de las flechas -->
				<?php if ($pagina == 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?>
					<!-- Si no es la pagina 1 se da formato al cuadro haciendo que le de la funcionalidad reversible -->
					<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
				<?php endif; ?>

				<!-- Establecer los numeros de pagina -->
				<?php

				for ($i=1; $i <= $numeroPaginas ; $i++) {
					if ($pagina == $i) {
						echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
					} else {
						echo "<li><a href='?pagina=$i'>$i</a></li>";
					}
				}

				?>

				<!-- Se hace la opreacion para el boton de la derecha -->
				<?php if ($pagina == $numeroPaginas): ?>
					<li class="disabled">&raquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
				<?php endif; ?>

				<!--<li class="disabled"><a href="#">&laquo;</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">&raquo;</a></li> -->
			</ul>
		</section>
	</div>
</body>
</html>
