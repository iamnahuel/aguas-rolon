<?php 
       	include("js/grabardatos.js");
        //$name2 = $_POST ['nombre'];
       

?>

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
	
	<header class="header">
		
		
		<div class="contenedor">
			<img src="img/icon-menu.png" alt="" class="icon-menu1" id="btn-menu">
			<a class="" href="iniciarSecion.php"><h4 class="ingresar">Salir</h4></a>
			
			<nav class="nav" id="nav">
				<ul class="menu">
					<li class="menu__item"><a class="menu__link" href="#">Comprar</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Mis compras</a></li>
					<li class="menu__item"><a class="menu__link" href="productos.php">Productos</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Localidades</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Imagenes</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Contacto</a></li>
					

				</ul>
			</nav>
		</div>
	<div class="botnesMenu">
		<button id="comprar" class="bperfil" onClick="window.location='comprar.php'"><img src="img/bcomprar.png" /></button>
		<button id="miscompras" class="bperfil" onClick=""><img src="img/bmiscompras.png" /></button>
		<button id="productos" class="bperfil" onClick="window.location='productos.php'"><img src="img/bproductos.png" /></button>
		<button id="perfil" class="bperfil" onClick=""><img src="img/bperfil.png" /></button>
	</div>
	</header>
	<p class="banner">
		<img src="img/banner.jpg" alt="" class="banner__img">
		<div class="contenedorTitulo">
			<h5 class="banner__titulo"> <?php
										session_start();
										echo "Hola ".$_SESSION['variableNombre']; 
										 ?></h5>

		</div>
		<div class="iconos">
			<img src="img/telefono.png" alt="" class="icon-tel">

			<div class="icon-whatsapp"><a href="https://www.whatsapp.com/?lang=es" target="_blank"><img src="img/whatsapp.png" alt="" class="icon-whatsapp"></a></div>

			<img src="img/app.png" alt="" class="icon-app">

			<div class="icon-instagram"><a href="https://www.instagram.com/aguas_rolon/" target="_blank"><img src="img/instagram.png" alt="" class="icon-instagram"></a></div>

			<div class="icon-instagram"><a href="https://www.facebook.com/profile.php?id=100011910828115" target="_blank"><img src="img/facebook.png" alt="" class="icon-facebook"></a></div>

			<img src="img/correo.png" alt="" class="icon-correo">

			<div class="icon-ubicacion"><a href="https://www.google.com.ar/maps/place/37%C2%B010'01.7%22S+63%C2%B024'33.4%22W/@-37.1671449,-63.4103753,312m/data=!3m2!1e3!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d-37.1671475!4d-63.4092807" target="_blank"><img src="img/ubicacion.png" alt="" class="icon-ubicacion"></a></div>
		</div>
		<div class="piePagina">
			<h7 class="autor">Desarrollado por IAmNahuel</h7>
			
		</div>
	</p>
	<script src="js/menu.js"></script>
	
</body>
</html>