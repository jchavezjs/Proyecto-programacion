<?php

	$ID = $_POST["ID"];   
	$nombre = $_POST["nombre"];   
	$apellido = $_POST["apellido"];   
	$sexo = $_POST["sexo"];   
	$correo = $_POST["correo"];   
	$usuario = $_POST["usuario"];   
	$contrasena = $_POST["contrasena"];   
	$ruta = "img/".$usuario.".jpg"; 
   $privilegio = $_POST["tipousuario"];


//conexion a la base de datos   
include("conexion.php");   

	if (isset($_POST["insert"])) { 

$insert = "INSERT INTO usuario (IDusuario,nombre,apellido,sexo,correo,usuario,contrasena,rutafoto,privilegio)
 VALUES ('$ID','$nombre','$apellido','$sexo','$correo','$usuario','$contrasena','$ruta','$privilegio')";   
mysql_query($insert); 
$carpeta = "../img/";

			//Abrimos el directorio con el comnado OPENDIR, y le decimos dentro donde esta especificada la ruta.
			opendir($carpeta);
			//creamos una variable destino que me va almacenar el nombre.
			$destino = $carpeta.$_FILES['rutafoto']['name'];
			copy($_FILES['rutafoto']['tmp_name'] , $destino);
			//le cambiamos el nombre de la imagen por medio de la variable xD ...
			$nuevoNombre = $usuario.".jpg";
			//cambiamos el nombre de la imagen por la ruta anterios y la tura nueva.
			rename($destino,"../img/".$nuevoNombre);
			echo '<script> window.location="../panel_home.php";</script>';
  

echo '<script> window.location="../panel_home.php#/usuarios";</script>'; }


if (isset($_POST["update"])) {
    	

$UPDATE = ("UPDATE usuario SET nombre='$nombre', apellido = '$apellido', sexo = '$sexo', correo = '$correo', usuario = '$usuario', contrasena = '$contrasena', rutafoto = '$rutafoto'
, privilegio = '$privilegio' 
WHERE idusuario = '$ID'");
mysql_query($UPDATE); 
 

echo '<script> window.location="../panel_home.php#/usuarios";</script>';   
    }    

if (isset($_POST["delete"])) { 

$delete = ("DELETE FROM usuario WHERE idusuario = '$ID'");
mysql_query($delete); 
echo '<script> window.location="../panel_home.php#/usuarios";</script>';  
}


?>  