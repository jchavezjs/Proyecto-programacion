<?php
	session_start();
	ob_start();
	include 'conexion.php';
	if (isset($_POST['login'])){
		$user= $_POST['usuario'];
		$pw= $_POST['clave'];	
		$log= mysql_query("SELECT * FROM usuario where usuario='$user' and contrasena='$pw' and privilegio=0");
		if(mysql_num_rows($log)>0){
			$row = mysql_fetch_array($log);
			$_SESSION["id"] = $row['idUsuario'];
			$_SESSION["usuario"] = $row['usuario'];
			$_SESSION["privilegio"] = $row['privilegio'];
			$_SESSION["nombre"] = $row['nombre'];
			$_SESSION["apellido"] = $row['apellido'];
			$_SESSION["sexo"] = $row['sexo'];
			$_SESSION["correo"] = $row['correo'];
			$_SESSION["usuario"] = $row['usuario'];
			$_SESSION["contrasena"] = $row['contrasena'];
			$_SESSION["ruta"] = $row['rutaFoto'];
		}else{
			echo '<script>alert("usuario o contraseña invalidos");</script>';
		}
		echo '<script> window.location="../panel_home.php";</script>';
	}
?>