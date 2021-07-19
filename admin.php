<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Aguas Rolon</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-sacle=1.0">
	<link rel="stylesheet" href="css/perfil.css">
	<link href="https://file.myfontastic.com/oYeTFjWLMCbWPgLngGj8N5/icons.css" rel="stylesheet">
</head>
<body>
	<?php 
       	include("js/grabardatos.js");
	 ?>
	<header class="header">
		
		
		<div class="contenedor">
			<img src="img/icon-menu.png" alt="" class="icon-menu1" id="btn-menu">
			<a class="" href="iniciarSecion.php"><h4 class="ingresar">Salir</h4></a>
			
			<nav class="nav" id="nav">
				<ul class="menu">
					<li class="menu__item"><a class="menu__link" href="comprasRealizadas.php">Ventas</a></li>
					<li class="menu__item"><a class="menu__link" href="listadoclientes.php">Clientes</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Imagenes</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Productos</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Localidades</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Contacto</a></li>
					

				</ul>
			</nav>
		</div>
		<div class="logoAG">
			<img src="img/logo.png" alt="" class="logoAG">
		</div>
		
	</header>
	<p class="banner">
		<img src="img/banner.jpg" alt="" class="banner__img">
		<div class="contenedorTitulo">
			<h5 class="banner__titulo"><?php
										session_start();
										echo "Hola ".$_SESSION['variableNombre']; 
										 ?></h5>
		</div>
		
		<div class="piePagina">
			<h7 class="autor">Desarrollado por IAmNahuel</h7>
		</div>
	</p>
	<script src="js/menu.js"></script>
	
</body>
</html>