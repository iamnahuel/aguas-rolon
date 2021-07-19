  <?php
     include'con_db.php';
     include'cargarTablas';
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Aguas Rolon - Clientes</title>
      <link rel="stylesheet" href="css/listadoclientes.css">
    
  
</head>
<body>
    <header class="header">
        
        <div class="contenedor">
            <img src="img/icon-menu.png" alt="" class="icon-menu1" id="btn-menu">
            
              
            
            
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu__item"><a class="menu__link" href="admin.php">Perfil</a></li>
                    <li class="menu__item"><a class="menu__link" href="productos.php">Productos</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Localidades</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Imagenes</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="titulo">
                <h4 class="tituloh4">Clientes</h4>
        </div>
        
    </header>
    <p class="banner">
        <img src="img/banner.jpg" alt="" class="banner__img">


        <?php
        cargarTablas.cargarCompras('ID');
        ?>
      

        <div class="tabla">
            <table class="tabla1">
             <thead>
                <tr>
                  <td>ID</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Usuario</td>
                  <td>Clave</td>
                  <td>Celular</td>
                  <td>Localidad</td>
                  <td>Direccion</td>
                  <td>Correo</td>
                  <td>T. Usuario</td>
                </tr>
             </thead>
               <?php
                  $consulta = "select * from usuarios";
                  $resultado = mysqli_query($conex,$consulta);

                  while($mostrar=mysqli_fetch_array($resultado)){
                ?>

             <tr>
                 <td><?php echo $mostrar['ID'] ?></td>
                   <td><?php echo $mostrar['Nombre'] ?></td>
                  <td><?php echo $mostrar['Apellido'] ?></td>
                  <td><?php echo $mostrar['Usuario'] ?></td>
                  <td><?php echo $mostrar['Clave'] ?></td>
                  <td><?php echo $mostrar['Celular'] ?></td>
                  <td><?php echo $mostrar['Localidad'] ?></td>
                  <td><?php echo $mostrar['Direccion'] ?></td>
                  <td><?php echo $mostrar['Correo'] ?></td>
                  <td><?php echo $mostrar['TUsuario'] ?></td>
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