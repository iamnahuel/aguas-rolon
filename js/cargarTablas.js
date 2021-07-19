<php
include("con_db.php");

function cargarCompras ($orden){
                  $consulta = "select * from compras oredey by $orden";
                  $resultado = mysqli_query($conex,$consulta);
                
                  $consultaX = "select id_usuario from compras";
                  $resultadoX = mysqli_query($conex,$consultaX);

                  $consultaA = "select id_producto from compras";
                  $resultadoA = mysqli_query($conex,$consultaA);

                  
                      
}

 function saludito($dato){
 echo "Hola ";
 }

 





function cargarClientes (){

}

function cargarProductos (){

}

function cargarLocalidades(){

}

 
             