<?php
	session_start();
	ob_start();
	include 'conexion.php';
	if (isset($_POST['login'])){
<<<<<<< HEAD
		$user= $_POST['usuario'];
		$pw= $_POST['clave'];	
		$log= mysql_query("SELECT * FROM usuario where usuario='$user' and contrasena='$pw'");
		if(mysql_num_rows($log)>0){
			$row = mysql_fetch_array($log);
			$_SESSION["usuario"] = $row['usuario'];
			$_SESSION["privilegio"] = $row['privilegio'];
		}
		echo '<script> window.location="../home.php";</script>';
=======
		$user= $_POST['txtUsuario'];
		$pw= $_POST['txtPass'];	
		$log= mysql_query("SELECT * FROM usuarios where usuario='$user' and clave='$pw' and activo='si'");
		if(mysql_num_rows($log)>0){
			$row = mysql_fetch_array($log);
			$_SESSION["usuario"] = $row['usuario'];
			$_SESSION["privilegio"] = $row['privilegios'];
			echo '<script> window.location="../index.php";</script>';
		}else{
			$log= mysql_query("SELECT * FROM usuarios where usuario='$user' and clave='$pw' and activo='no'");
			if(mysql_num_rows($log)>0){
				echo '<script> window.location="../login.php?a=5";</script>';
			}else{
			echo '<script> window.location="../login.php?a=1";</script>';
			}
		}
>>>>>>> origin/master
	}
?>