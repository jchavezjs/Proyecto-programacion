<?php 
	include '../procesos/conexion.php';
	$sqlcat = mysql_query("SELECT * FROM categoria");
	$sqlpro = mysql_query("SELECT * FROM proveedores");
 ?>

<section class="contenedor2" id="contenedor2">
	<script> $(document).ready(function() {
    $('select').material_select();
  });</script>
	<div class="row">
		<div class="col s12 m12 l12 table-margin"><h3>Mantenimiento de Productos</h3></div>
		<div class="col s12 m6 l6">
		<form method="post" action="procesos/agregarProducto.php" enctype="multipart/form-data">
			<div class="row">
				
					<div class="row">
						<div class="input-field">
							<input id="user" name="idProducto" type="text" class="validate">
							<label for="textarea1">ID</label>
						</div>
					</div>
				
			</div>
			<div class="row">
				
					<div class="row">
						<div class="input-field">
							<input id="user" name="nombreProducto" type="text" class="validate">
							<label for="textarea1">nombre</label>
						</div>
					</div>
				
			</div>
			<div class="row">
				
					<div class="row">
						<div class="input-field">
							<input id="user" name="descripcionProducto" type="text" class="validate">
							<label for="textarea1">Descripcion</label>
						</div>
					</div>
				
			</div>
			
				<div class="row">
				
					<div class="row">
						<div class="input-field">
							 <select name="genero">
      							<option value="" disabled selected>Seleccione una opción </option>
      							<option value="1">Masculino</option>
      							<option value="0">Femenino</option>
    						</select>
    							<label>Genero</label>
						</div>
					</div>
				
		</div>

		<div class="col s12 m6 l6">
			<div class="row">
				
					<div class="row">
						<div class="input-field">
							<input id="user" name="precioProducto" type="text" class="validate">
							<label for="textarea1">precio</label>
						</div>
					</div>
				
			</div>
			<div class="row">
				
					<div class="row">
						<div class="row">
						<div class="input-field">

							 <select name="idProveedor">
							 	<option value="" disabled selected>Seleccione una opción </option>
							 	<?php 
									while($rowpro = mysql_fetch_array($sqlpro)){
										$idProveedor = $rowpro['idProveedor'];
										$nombreProveedor = $rowpro['proveedor'];
										echo "<option value='".$idProveedor."'>".$nombreProveedor."</option>";
									}
									
								 ?>
    						</select>
    							<label>Proveedor</label>
						</div>
					</div>
					</div>
				
			</div>
			<div class="row">
				
					<div class="row">
						<div class="input-field">

							 <select name="idCategoria">
							 	<option value="" disabled selected>Seleccione una opción </option>
							 	<?php 
									while($rowcat = mysql_fetch_array($sqlcat)){
										$idProveedor = $rowcat['idCategoria'];
										$nombreProveedor = $rowcat['categoria'];
										echo "<option value='".$idProveedor."'>".$nombreProveedor."</option>";
									}
									
								 ?>
    						</select>
    							<label>Categoria</label>
						</div>
					</div>
				
			</div>
							
		
		<div>
			<form action="#">
				<div class="file-field input-field">
					<div class="btn">
						<span>Fotografía</span>
						<input type="file" name="foto">
					</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
			</form>
		</div>

<div class="row">
<div class="col s12 ">
<button class="btn waves-effect waves-light modal-action modal-close light-green" type="submit" name="agregar">Guardar
 	<i class="material-icons right">done</i>
</button>
<button class="btn waves-effect waves-light modal-action modal-close light-green" type="submit" name="modificar">Modificar
 	<i class="material-icons right">done</i>
</button>


</div>
</div>

			


		


		
		</div>
		</form>
		</div>
	</div>




	<table class="striped table-margin centered responsive-table">
        <thead>
          <tr>
              <th data-field="idProducto">ID</th>
              <th data-field="name">Nombre</th>
              <th data-field="precio">Precio</th>
              <th data-field="idProveedor">ID proveedor</th>
              <th data-field="idCategoria">ID Categoria</th>
              <th data-field="genero">Genero</th>
              <th data-field="rutaFoto">Foto</th>
          </tr>
        </thead>

        <tbody>
       <?php
       		include '../procesos/conexion.php';
       		$sql = mysql_query("SELECT * FROM producto");
       		while ($rows= mysql_fetch_array($sql)){
       			$id= $rows['idProducto'];
       			$nombre= $rows['nombre'];
       			$precio= $rows['precio'];
       			$idProveedor= $rows['idProveedor'];
       			$sqlprov = mysql_query("SELECT proveedor FROM proveedores Where idProveedor='$idProveedor'"); 
       			$proveedor= mysql_result($sqlprov, 0);
       			$idCategoria= $rows['idCategoria'];
       			$sqlcate = mysql_query("SELECT categoria FROM categoria Where idCategoria='$idCategoria'"); 
       			$categoria= mysql_result($sqlcate, 0);
       			if($rows['genero']==1){
       				$genero= "Masculino";
       			}else{
       				$genero= "Femenino";
       			}
       			
       			$rutaFoto= $rows['rutaFoto'];
       			    			echo "<tr>
        					<td>$id</td>
        					<td>$nombre</td>
        					<td>$".$precio."</td>
        					<td>$proveedor</td>
        					<td>$categoria</td>
        					<td>$genero</td>
        					<td><img src='".$rutaFoto."' width='100px'></td>
        					
        				  </tr>";
        		
       		}

       ?>
        </tbody>

      </table>
</section>
