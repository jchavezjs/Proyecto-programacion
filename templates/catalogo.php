

<section class="row cat-wrap">
	<h3 class="center section-title">Catalogo</h3>
	<div class="col s12 no-padding catalogue">
      <?php
      	include '../procesos/conexion.php';
      	$productos = mysql_query("select * from producto");
      	if($productos === FALSE) { 
		    die(mysql_error()); // TODO: better error handling
		}
      	while($producto=mysql_fetch_array($productos)){ ?>
		<div class="col s12 m6 l4">
		          <div class="card sale hoverable">
		            <div class="card-image">
		              <img src="<?php echo $producto['rutaFoto'];?>" width="400px" height="250px">
		            </div>
		            <div class="card-content sale-description">
		            	<div class="row no-margin">
			            	<div class="col s6 description">
			              		<span class="marca"><?php echo $producto['nombre'];?></span><br>
			              		<span class="name"><?php echo $producto['descripcion'];?></span>
			            	</div>
			            	<div class=" col s3 price">
			              		<span class="price">$<?php echo $producto['precio'];?></span>
			            	</div>
							<div class="add-cart col s3">
								<a class="btn-floating waves-effect waves-light light-green" href="procesos/agregarCarrito.php?id=<?php echo $producto['idProducto'];?>" onclick="Materialize.toast('Producto agregado', 4000)">
			  						<i class="material-icons">add</i>
			  					</a>
		  					</div>	
	  					</div>
		            </div>
		          </div>
		  </div>
		 <?php 
		}
		 ?>
		               
	</div>

</section>

<script>
	$(document).ready(function() {
    $('select').material_select();
  });
</script>