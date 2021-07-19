<?php
     include'con_db.php';
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Aguas Rolon</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-sacle=1.0">
	<link rel="stylesheet" href="css/productos.css">
	<link href="https://file.myfontastic.com/oYeTFjWLMCbWPgLngGj8N5/icons.css" rel="stylesheet">
</head>
<body>
	<header class="header">

		<div class="contenedor">
			<img src="img/icon-menu.png" alt="" class="icon-menu1" id="btn-menu">
			<nav class="nav" id="nav">
				<ul class="menu">
					<li class="menu__item"><a class="menu__link" href="perfil.php">Perfil</a></li>
					<li class="menu__item"><a class="menu__link" href="comprar.php">Comprar</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Mis compras</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Localidades</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Contacto</a></li>
				</ul>
			</nav>
		</div>
	 	<div class="titulo">
                <h4 class="tituloh4">Productos</h4>
    	</div>
		
		
	</header>
	<p class="banner">
		<img src="img/banner.jpg" alt="" class="banner__img">
		



		<div class="tabla">
            <table class="tabla1">
             <thead>
                <tr>
                  <td>Nombre</td>
                  <td>Capacidad</td>
                  <td>Precio</td>
                  <td>Cantidad</td>
                  
                </tr>
             </thead>
               <?php
                  $consulta = "select * from productos";
                  $resultado = mysqli_query($conex,$consulta);

                  while($mostrar=mysqli_fetch_array($resultado)){
                ?>

             <tr>
                  <td><?php echo $mostrar['Nombre'] ?></td>
                  <td><?php echo $mostrar['Capacidad'] ?> Litros</td>
                  <td>$<?php echo $mostrar['Precio'] ?></td>
                  <td><?php echo $mostrar['Cantidad'] ?></td>
                  
             </tr>
             <?php
             }
             ?>
            </table> 
        </div>

        <div class="buttonDiv">
            <input type="submit" class="btndescargar" id="btnDescargarId" value="Descargar PDF" name="iniciar">
        </div>
		<div class="piePagina">
			<h7 class="autor">Desarrollado por IAmNahuel</h7>
		</div>
	</p>
	<script src="js/menu.js"></script>
</body>
</html>