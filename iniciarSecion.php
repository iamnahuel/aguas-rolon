<!DOCTYPE html>
<html lang="en"  dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Aguas Rolon</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-sacle=1.0">
	<link rel="stylesheet" href="css/iniciarSecion.css">
	<link href="https://file.myfontastic.com/oYeTFjWLMCbWPgLngGj8N5/icons.css" rel="stylesheet">
</head>
<body>
	<header class="header">

		<div class="contenedor">
			
			<a class="" href="index.html"><h4 class="ingresar">Salir</h4></a>
			<!-- <span class="icon-menu" id="btn-menu"></span> -->
			
		</div>
		<div class="logoAG">
			<img src="img/logo.png" alt="" class="logoAG">
		</div>
		
	</header>
	<p class="banner">
		<img src="img/banner.jpg" alt="" class="banner__img">

		
		<div class="contenedor" >
			<form method="post">
			<div class="usuarioDiv">
				<h2 class="usuario">Usuario</h2>
				<input type="text" class="usuarioInput" name="usuario" id="nombre" maxlength="30" placeholder="">
			</div>
			<br>
			<div class="claveDiv">
				<h2 class="clave">Clave</h2>
				<input type="password" class="claveInput" name="clave" id="clave" maxlength="30" placeholder="">
			</div>
			
			<br>
			<div class="buttonDiv">
				<input type="submit" class="btnAceptar" id="btnAceptar" value="Aceptar" name="iniciar">
				<input type="submit" class="btnCancelar" id="btnCancelar" value="Cancelar" name="cancelar">
				<button type="" class="btnRegistrarse" id="btnRegistrarse" value="Registrarse" name="registrarse">Registrarse</button>
			</div>
			</form>
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
	
	<?php 
       	include("js/grabardatos.js");
    ?>
	


</body>
</html>