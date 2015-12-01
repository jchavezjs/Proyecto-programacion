<?php
  session_start();
  if (!isset($_SESSION['usuario'])){
    echo '<script> window.location="panel.php";</script>';
  }
?>
<!DOCTYPE html>
<html lang="es" ng-app="panel">
<head>

	<!--Meta tags-->

	<meta charset="UTF-8"/>
	<meta name="description" content="Tienda online especializada en venta de vestuario y calzado deportivo.">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>

	<title>CPanel</title>

	<!--Stylesheets-->

	<!--Google fonts material icons-->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

	<!--Materialize css-->
	<link rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

	<!--Production stylesheet-->
	<link rel="stylesheet" href="css/estilo.css"/>
	<script src="lib/jquery-2.1.4.min.js"></script>
  <script src="js/materialize.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="#/profile">Perfil</a></li>
	  <li><a href='procesos/logouta.php'>Cerrar Sesión</a></li>
	</ul>
	<nav>
	  <div class="nav-wrapper red darken-4">
	    <a href="#/" class="brand-logo">CPanel</a>
	    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	    <ul class="right hide-on-med-and-down">
	      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">@admin<i class="material-icons right">arrow_drop_down</i></a></li>
	    </ul>
	     <ul class="side-nav" id="mobile-demo">
	     <li><a href="#/">Inicio</a></li>
        <li><a href="#/profile">Perfil</a></li>
        <li><a href='procesos/logouta.php'>Cerrar Sesión</a></li>
      </ul>
	  </div>
	</nav>
	<div ng-view></div>
	<footer class="page-footer red darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">SportCenter</h5>
                <p class="grey-text text-lighten-4">Visita los sitios oficiales de nuestro proveedores.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Nike</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Adidas</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">New Balance</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Puma</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2015 Copyright. Todos los derechos reservados.
            <a class="grey-text text-lighten-4 right" href="#!">info@sportcenter.com</a>
            </div>
          </div>
        </footer>
	<script src="lib/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular-route.js"></script>
	
	<script src="js/panel.js"></script>

	<!--Production javascript´s files-->
	
</body>
</html>