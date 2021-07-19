<?php

include("con_db.php");
include ("js/validarDatos.js");


//Registrar Usuario Nuevo
if (isset($_POST['registrar'])) {
	if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['clave']) >= 1 && strlen($_POST['celular']) >= 1 && strlen($_POST['localidad']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['correo']) >= 1) {
	
	$name = trim($_POST['nombre']);
	$apellido = trim($_POST['apellido']);
	$usuario = trim($_POST['usuario']);
	$clave = trim($_POST['clave']);
	$celular = trim($_POST['celular']);
	$localidad = trim($_POST['localidad']);
	$direccion = trim($_POST['direccion']);
	$email = trim($_POST['correo']);
	$tusuario = "cliente";
	
	//consultamos si existe algun cliente con ese usuario
	$consulta = "SELECT * FROM usuarios where Usuario = '$usuario'";
    $resultado1 = mysqli_query($conex,$consulta);
    $filas=mysqli_num_rows($resultado1);

    $consulta1 = "SELECT * FROM usuarios where Celular = '$celular'";
    $resultado2 = mysqli_query($conex,$consulta1);
    $filasCel=mysqli_num_rows($resultado2);

    $consulta2 = "SELECT * FROM usuarios where Correo = '$email'";
    $resultado3 = mysqli_query($conex,$consulta2);
    $filasCorreo=mysqli_num_rows($resultado3);

    $bandera = 0;

    if ($filas > 0) {
    	echo "El Nombre de Usuario ya fue utilizado";
		$bandera = 1;
    }if(validar_usuario($_POST['usuario'])){
    	echo "Usuario incorrecto";
		$bandera = 1;
    }else{

    }

    if ($filasCel > 0) {
    	echo "Este celular ya fue utilizado";
		$bandera = 1;
    }if (strlen($celular) != 10) {
    	echo "El celular debe incluir 10 digitos sin incluir 0 ni 15";
		$bandera = 1;
    }else{
    	
    }
    
    if ($filasCorreo > 0) {
    	echo "Este correo ya fue utilizado";
		$bandera = 1;
    }if (comprobar_email($_POST['correo'])){
    	//echo 'El email introducido es correcto!';
   	}else{
      echo 'El email introducido NO es correcto!';
      $bandera = 1;
    }

    if (validar_clave($_POST['clave'])) {
   	//echo 'Clave correcta';
   	}else{
   	echo 'Clave incorrecta';
   	$bandera = 1;
   	}
    

    if ($bandera <= 0) {
    	$consulta = "INSERT INTO usuarios(Nombre, Apellido, Usuario, Clave, Celular, Localidad, Direccion, Correo, TUsuario) VALUES ('$name', '$apellido', '$usuario', '$clave', '$celular', '$localidad', '$direccion', '$email', '$tusuario')";
			$resultado = mysqli_query($conex, $consulta);
			echo "Guardado Correctamente";
    }


	
}else {
	echo "Completa todos los campos";
}
}



//Inciaiar Secion
if (isset($_POST['iniciar'])) {

	if(strlen($_POST['usuario']) >= 1 && strlen($_POST['clave'])) {

		$usuario =$_POST['usuario'];
		$clave =$_POST['clave'];
		$_SESSION['usuario']=$usuario;
		

		$consulta="SELECT*FROM usuarios where Usuario = '$usuario' and Clave = '$clave'";
		$resultado=mysqli_query($conex,$consulta);
		$filas=mysqli_num_rows($resultado);
		$row = mysqli_fetch_assoc($resultado);
		
	
		if ($filas) {
			$nombre = $row['Nombre'];
			$tipoUsuario=$row['TUsuario'];
			if($tipoUsuario != "administrador"){
				session_start();
				$_SESSION['variableNombre']= $nombre;
					header("location:perfil.php");
			}else{
				session_start();
				$_SESSION['variableNombre']= $nombre;
			 		header("location:admin.php");
			}
		}else{
			echo "Datos incorrectos";
		}
		
 	}else{
	echo "Completa todos los campos";
	}
}

//registrarse
if (isset($_POST['registrarse'])) {
	header("location:registrarse.php");
}




