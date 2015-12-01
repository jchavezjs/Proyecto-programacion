<?php
	include 'conexion.php';			
	if (isset($_POST['registrar'])) {
		$nombre= $_POST['nombre'];
		$apellido= $_POST['apellido'];
		$usuario= $_POST['usuario'];
		$correo= $_POST['correo'];
		$sexo= $_POST['sexo'];
		$pass= $_POST['contrasena'];
		$ruta = "img/".$usuario.".jpg";
		$valUsuario= mysql_query("SELECT * FROM usuario where usuario='$usuario'");
		$valCorreo= mysql_query("SELECT * FROM usuario where correo='$correo'");
		if(mysql_num_rows($valUsuario)>0){
			echo '<script> alert("usuario existente");</script>';
			echo '<script> window.location="../";</script>';
		}elseif(mysql_num_rows($valCorreo)>0){
			echo '<script> alert("correo existente");</script>';
			echo '<script> window.location="../";</script>';
		}else{
			$query= mysql_query("INSERT INTO usuario (nombre, apellido, sexo, correo, usuario, contrasena, rutaFoto, privilegio) values ('$nombre','$apellido','$sexo','$correo','$usuario','$pass','$ruta',1)");			
			$carpeta = "../img/";
			//Abrimos el directorio con el comnado OPENDIR, y le decimos dentro donde esta especificada la ruta.
			opendir($carpeta);
			//creamos una variable destino que me va almacenar el nombre.
			$destino = $carpeta.$_FILES[$_POST['fot']]['name'];
			copy($_FILES[$_POST['fot']]['tmp_name'] , $destino);
			//le cambiamos el nombre de la imagen por medio de la variable xD ...
			$nuevoNombre = $usuario.".jpg";
			//cambiamos el nombre de la imagen por la ruta anterios y la tura nueva.
			rename($destino,"../img/".$nuevoNombre);
			
		}
	}
 ?>