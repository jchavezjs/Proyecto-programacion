<?php
	session_start();
	ob_start();
	include 'conexion.php';
	if (isset($_POST['login'])){
		$user= $_POST['usuario'];
		$pw= $_POST['clave'];	
		$log= mysql_query("SELECT * FROM usuario where usuario='$user' and contrasena='$pw' and privilegio=1");
		if(mysql_num_rows($log)>0){
			$row = mysql_fetch_array($log);
			$_SESSION["usuario"] = $row['usuario'];
			$_SESSION["privilegio"] = $row['privilegio'];
		}else{
			echo '<script>alert("usuario o contraseña invalidos");</script>';
		}
		echo '<script> window.location="../home.php";</script>';
	}
?>