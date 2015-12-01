
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es" ng-app="app">
<head>

	<!--Meta tags-->

	<meta charset="UTF-8"/>
	<meta name="description" content="Tienda online especializada en venta de vestuario y calzado deportivo.">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>

	<title>SportCenter</title>

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
	
	<!--Barra de navegación-->

	<nav class="nav-wrap">
		<div class="nav-wrapper indigo darken-2 nav-client">
			<a href="#/" class="logo brand-logo">SportCenter</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<div class="hide-on-med-and-down account">
				<ul>

          <?php
            if (isset($_SESSION['usuario'])){
    					echo "<li><a href='#/profile'>Perfil</a></li>
                    <li><a href='procesos/logout.php'>Cerrar Sesión</a></li>";
            }else{
              echo "<li><a class='modal-trigger xx' href='#modal1'>Registrarse</a></li>
              <li><a class='modal-trigger xx' href='#modal2'>Ingresar</a></li>";
            }
          ?>
          </ul>
		    </div>
		    <a class="hide-on-med-and-down btn-floating waves-effect waves-light light-green cart" href="#/carrito">
			  	<i class="material-icons">shopping_cart</i>
			</a>

		    <div class="sub-nav">
			    <ul class="hide-on-med-and-down">
			    	<li><a href="#/#identidad" class="men-nav">¿Quienes somos?</a></li>
			    	<li><a href="#/#encuentranos" class="men-nav">Encuentranos</a></li>
			    	<li><a href="#/catalogo" class="men-nav">Catálogo</a></li>
			    </ul>
		    </div>
		    <ul class="side-nav" id="mobile-demo">
		    	<li><a href="#/">Inicio</a></li>
		    	<li><a href="#/#identidad">¿Quienes somos?</a></li>
		    	<li><a href="#/#encuentranos">Encuentranos</a></li>
		    	<li><a href="#/catalogo">Catálogo</a></li>
		        <li><a href="#/carrito">Mi Carrito</a></li>
		         <?php
            if (isset($_SESSION['usuario'])){
              echo "<li><a href='#/profile.php'>Perfil</a></li>
                    <li><a href='procesos/logout.php'>Cerrar Sesión</a></li>";
            }else{
              echo "<li><a class='modal-trigger xx' href='#modal1'>Registrarse</a></li>
              <li><a class='modal-trigger xx' href='#modal2'>Ingresar</a></li>";
            }
          ?>
		    </ul>
	    </div>
	</nav> 
	
    <div ng-view>
    	

    </div>
	
	<footer class="page-footer indigo">
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


<!-- Modal 1 -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
    <div class="container">
      <h4><i class="material-icons info">content_paste</i>Ingrese sus datos</h4>
      <form action="procesos/registrarUsuario.php" method="post" enctype="multipart/form-data">
      <p class="mod-margin">
        <div class="input-field col s6">
          <input id="first_name" name="nombre" type="text" class="validate">
          <label for="first_name">Nombres</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="apellido" type="text" class="validate">
          <label for="last_name">Apellidos</label>
        </div>
         <div class="input-field ">
        <select name="sexo">
          <option value="" disabled selected>Sexo</option>
        <option value="1">Masculino</option>
        <option value="0">Femenino</option>
        </select>
      </div>
    
        
<div class="input-field col s6">
          <input id="user" type="text" class="validate" name="usuario">
          <label for="user">Usuario</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" class="validate" name="contrasena">
          <label for="password">Contraseña</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" class="validate" name="correo">
          <label for="email">Email</label>
        </div>
        <div class="file-field input-field">
      <div class="btn">
        <span>Foto de Perfil</span>
        <input type="file" name="foto">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      <button class="btn waves-effect waves-light modal-action modal-close light-green" type="submit" name="registrar">Listo
      <i class="material-icons right">send</i>
      </button>
      </p>
      </form>
        </div>
  </div>
  </div>       
<!-- Modal 2 -->
 <div id="modal2" class="modal modal-fixed-footer">
     
    	<div class="modal-content">
		<div class="container mod-margin">
    		<h4>Ingresar</h4>

        <form action="procesos/login.php" method="post" enctype="multipart/form-data">
    		<p  class="mod-margin">

          <div class="input-field col s6">
            <input id="user" name="usuario" type="text" class="validate">
            <label for="user"><i class="material-icons right">supervisor_account</i> Usuario</label>

          </div>
          <div class="input-field col s6">
            <input id="password" name="clave" type="password" class="validate">
            <label for="password"><i class="material-icons right">lock</i>Contraseña</label>
          </div>
          <button class="btn waves-effect waves-light modal-action modal-close light-green" name="login">Ingresar
            <i class="material-icons right">send</i>
          </button>
        </p>
        </form>
    	</div>
    </div>
</div>


	<!-- Javascript's libraries files-->

	
	<script src="lib/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular-route.js"></script>
	
	<script src="js/app.js"></script>

	<!--Production javascript´s files-->
	
</body>
</html>