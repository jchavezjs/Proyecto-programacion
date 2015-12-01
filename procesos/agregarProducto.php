<?php
	include 'conexion.php';			
	if (isset($_POST['agregar'])) {
		$idProducto= $_POST['idProducto'];
		$nombre= $_POST['nombreProducto'];
		$descripcion= $_POST['descripcionProducto'];
		$precio= $_POST['precioProducto'];
		$idProveedor= $_POST['idProveedor'];
		$idCategoria= $_POST['idCategoria'];
		$genero= $_POST['genero'];
		$ruta = "img/".$nombre.".jpg";
		
		
			$query= mysql_query("INSERT INTO producto (idProducto, nombre, descripcion, precio, idProveedor, idCategoria, genero, rutaFoto, activo) values ('$idProducto','$nombre','$descripcion','$precio','$idProveedor','$idCategoria','$genero','$ruta', 1)");			
			echo "Datos insertados correctamente";
			$carpeta = "../img/"	;
			//Abrimos el directorio con el comnado OPENDIR, y le decimos dentro donde esta especificada la ruta.
			opendir($carpeta);
			//creamos una variable destino que me va almacenar el nombre.
			$destino = $carpeta.$_FILES['foto']['name'];
			copy($_FILES['foto']['tmp_name'] , $destino);
			//le cambiamos el nombre de la imagen por medio de la variable xD ...
			$nuevoNombre = $nombre.".jpg";
			//cambiamos el nombre de la imagen por la ruta anterios y la tura nueva.
			rename($destino,"../img/".$nuevoNombre);

		}
		elseif (isset($_POST['modificar'])) {
		$idProducto= $_POST['idProducto'];
		$sqlnew = mysql_query("SELECT * FROM producto WHERE idProducto = '$idProducto'");
		$rows = mysql_fetch_array($sqlnew);
		$nombreAnterior = $rows['nombre'];	
		$nombre= $_POST['nombreProducto'];
		$descripcion= $_POST['descripcionProducto'];
		$precio= $_POST['precioProducto'];
		$idProveedor= $_POST['idProveedor'];
		$idCategoria= $_POST['idCategoria'];
		$genero= $_POST['genero'];
		$ruta = "img/".$nombre.".jpg";
		rename("../img/".$nombreAnterior.".jpg","../".$ruta);
			$query= mysql_query("UPDATE producto SET idProducto = '$idProducto' , nombre = '$nombre' , descripcion ='$descripcion' , precio = '$precio', idProveedor = '$idProveedor', idCategoria='$idCategoria', genero='$genero', rutaFoto='$ruta' WHERE idProducto ='$idProducto'");

		$validar= $_FILES['foto']['name'];
		if (isset($validar)) {
			//primero se especifica la ruta con una variable
			$carpeta = "../img/"	;
			//Abrimos el directorio con el comnado OPENDIR, y le decimos dentro donde esta especificada la ruta.
			opendir($carpeta);
			//creamos una variable destino que me va almacenar el nombre.
			$destino = $carpeta.$_FILES['foto']['name'];
			copy($_FILES['foto']['tmp_name'] , $destino);
			//le cambiamos el nombre de la imagen por medio de la variable xD ...
			$nuevoNombre = $nombre.".jpg";
			//cambiamos el nombre de la imagen por la ruta anterios y la tura nueva.
			rename($destino,"../img/".$nuevoNombre);
		}
			

		}else{
			echo "PROBLEMA aL INSERTAR DATOS";
		}
	
 ?>