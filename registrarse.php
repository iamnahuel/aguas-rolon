<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Aguas Rolon - Registrarse</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-sacle=1.0">
	<link rel="stylesheet" href="css/registrarse.css">
	<link href="https://file.myfontastic.com/oYeTFjWLMCbWPgLngGj8N5/icons.css" rel="stylesheet">
	
	 <script type="text/javascript">
        // Solo permite ingresar numeros.
        function soloNumeros(e){
    	var key = window.Event ? e.which : e.keyCode
	    return (key >= 48 && key <= 57)
    }
    </script>
   
    
</head>
<body>
	<header class="header">

		<div class="contenedor">
			
			<a class="" href="iniciarSecion.php"><h4 class="ingresar">Cancelar</h4></a>
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
			<div class="usuarioUno">
				<h2 class="nombre">Nombre</h2>
				<input type="text" class="nombreInput" name="nombre" id="nombre" maxlength="30" placeholder="">
				<h2 class="celular">Celular</h2>
				<input type="text" class="celularInput" name="celular" id="celular" maxlength="10" placeholder="Sin 0 ni 15" onKeyPress="return soloNumeros(event)">
			</div>
			<br><br><br><br>
			<div class="usuarioDos">
				<h2 class="apellido">Apellido</h2>
				<input type="text" class="apellidoInput" name="apellido" id="apellido" maxlength="40" placeholder="">
				<h2 class="localidad">Localidad</h2>
				<select id="localidad" class="localidadInput" name="localidad">
					
					<?php
					include'con_db.php';
					$getLocalidad = "select * from localidades";
					$getLocalidad1 = mysqli_query($conex,$getLocalidad);

					while ($row = mysqli_fetch_array($getLocalidad1))
						{
						$id = $row['ID-localidad'];
						$nombre = $row['Nombre-Localidad'];
						$codigoP = $row['Codigo-Postal'];
						$provincia = $row['Provincia'];
					?>
					<option value="<?php echo $nombre; ?>"> <?php echo $nombre; ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<br><br><br><br>
			<div class="usuarioTres">
				<h2 class="usuario">Usuario</h2>
				<input type="text" class="usuarioInput" name="usuario" id="nombre" maxlength="30" placeholder="">
				<h2 class="direccion">Direccion</h2>
				<input type="text" class="direccionInput" name="direccion" id="direccion" maxlength="50" placeholder="">
			</div>
			<br><br><br><br>
			<div class="usuarioCuatro">
				<h2 class="clave">Clave</h2>
				<input type="password" class="claveInput" name="clave" id="clave" maxlength="30" placeholder="">
				<h2 class="correo">Correo</h2>
				<input type="text" class="correoInput" name="correo" id="correo" maxlength="50" placeholder="">
			</div>
			
			<div class="buttonDiv">
			<form method="post">
				<input type="submit" class="btnAceptar" id="btnAceptar" value="Aceptar" name="registrar">
				<input type="submit" class="btnCancelar" id="btnCancelar" value="Cancelar">
			</form>	
			</div>
		</form>
			
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