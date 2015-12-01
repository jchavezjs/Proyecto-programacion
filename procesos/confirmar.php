<?php 
	session_start();
	include 'conexion.php';
	$arreglo=$_SESSION['carrito'];
	$usuario=$_SESSION['id'];
	for ($i=0; $i <count($arreglo) ; $i++) { 
		mysql_query("insert into salida(idProducto,idUsuario,cantidad,fecha) values(
			".$arreglo[$i]['Id'].",
			$usuario,
			1,
			now()
			)") or die(mysql_error());
	}
	unset($_SESSION['carrito']);
	echo "<script>window.location='../#/carrito'</script>";
?>