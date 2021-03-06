<!DOCTYPE html>
<html lang="es" ng-app="app">
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
	<section class="contenedor-img1 z-depth-4" id="contenedor-img1" >

  <section class="contenedor-img z-depth-4" id="contenedor-img ">
    
  </section>
</section>	
	 
<section class="contenedor-login" id="contenedor-login">
        <form method="post" action="procesos/loga.php">
        <p>

          <div class="input-field col s6">
            <input id="user" type="text" name="usuario" class="validate">
            <label for="user"><i class="material-icons right">supervisor_account</i> Usuario</label>

          </div>
          <div class="input-field col s6 margin-pass">
            <input id="password" type="password" name="clave" class="validate">
            <label for="password"><i class="material-icons right">lock</i>Contraseña</label>
          </div>
          <button class="btn waves-effect waves-light modal-action modal-close" name="login">Ingresar
            <i class="material-icons right">send</i>
          </button>
        </p>
 		</form>
</section>
	
	<script src="lib/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular-route.js"></script>
	
	<script src="js/panel.js"></script>

	<!--Production javascript´s files-->
	
</body>
</html>