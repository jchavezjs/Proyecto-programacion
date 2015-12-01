<?php 
	session_start();
	unset($_SESSION['carrito']);
	echo "<script>window.location='../#/carrito'</script>";
?>