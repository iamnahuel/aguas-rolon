<?php
  include'con_db.php';
  include'cargarTablas.js';
  $usuariooo = "pepito";
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <title>Aguas Rolon - Compras Realizadas</title>
    <link rel="stylesheet" href="css/listadoclientes.css">
</head>

<body>
    <header class="header">
     <div class="contenedor">
        <img src="img/icon-menu.png" alt="" class="icon-menu1" id="btn-menu">
          <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu__item"><a class="menu__link" href="perfil.php">Perfil</a></li>
                    <li class="menu__item"><a class="menu__link" href="productos.php">Productos</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Localidades</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Imagenes</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Contacto</a></li>
                </ul>
          </nav>
      </div>
      <div class="titulo">
          <h4 class="tituloh4">Compras Realizadas</h4>
      </div>
        
    </header>
    <p class="banner">
        <img src="img/banner.jpg" alt="" class="banner__img">

        <div class="tabla">
            <table class="tabla1">
             <thead>
                <tr>
                  <td>ID</td>
                  <td>Trans.</td>
                  <td>Usuario</td>
                  <td>Producto</td>
                  <td>Fecha Venta</td>
                  <td>Fecha Entrega</td>
                  <td>Estado</td>
                  <td>Cant.</td>
                  <td>Precio</td>
                  <td>Total</td>
                  <td>Cobro</td>
                  <td>Direccion</td>
                  <td>Localidad</td>
                </tr>
             </thead>
              
               <?php
                $consulta = "select * from compras";
                $resultado = mysqli_query($conex,$consulta);
                
                $consultaX = "select id_usuario from compras";
                $resultadoX = mysqli_query($conex,$consultaX);

                $consultaA = "select id_producto from compras";
                $resultadoA = mysqli_query($conex,$consultaA);

                  while($mostrar=mysqli_fetch_array($resultado)){


                     
                      $rowX = mysqli_fetch_assoc($resultadoX);
                      $nombreX = $rowX['id_usuario'];
                      $consultaX1 = "select * from usuarios where ID = $nombreX";
                      $resultadoX1 = mysqli_query($conex,$consultaX1);

                      $rowA = mysqli_fetch_assoc($resultadoA);
                      $nombreA = $rowA['id_producto'];
                      $consultaA1 = "select * from productos where ID = $nombreA";
                      $resultadoA1 = mysqli_query($conex,$consultaA1);
                   
                     
                     while ($mostrar2=mysqli_fetch_array($resultadoX1)) {

                      while ($mostrar3=mysqli_fetch_array($resultadoA1)) {
                     
                    
                ?>

             <tr>
                  <td><?php echo $mostrar['id_compra'] ?></td>
                  <td><?php echo $mostrar['id_transaccion'] ?></td>
                  <td><?php echo $mostrar2['Nombre'] ?></td>
                  <td><?php echo $mostrar3['Nombre'] ?></td>
                  <td><?php echo $mostrar['fecha_compra'] ?></td>
                  <td><?php echo $mostrar['fecha_entrega'] ?></td>
                  <td><?php echo $mostrar['estado_entrega'] ?></td>
                  <td><?php echo $mostrar['cantidad_producto'] ?></td>
                  <td>$ <?php echo $mostrar['monto_parcial'] ?></td>
                  <td>$ <?php echo $mostrar['monto_total'] ?></td>
                  <td><?php echo $mostrar['estado_cobro'] ?></td>
                  <td><?php echo $mostrar2['Direccion'] ?></td>
                  <td><?php echo $mostrar2['Localidad'] ?></td>
             </tr>
             <?php
             }
           }
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