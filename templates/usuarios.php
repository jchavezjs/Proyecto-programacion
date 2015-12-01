
<section class="contenedor2" id="contenedor2">
	<form method="POST" action="procesos/Ausuarios.php" enctype="multipart/form-data">
	<div class="row">
		<div class="col s12 m12 l12 table-margin"><h3>Mantenimiento de Usuarios</h3></div>
		
		<div class="col s12 m6 l6">
			<div class="row">
			
					<div class="row">
						<div class="input-field">
							<textarea id="ID" name="ID" class="materialize-textarea"></textarea>
							<label for="ID">ID</label>
						</div>
						
					</div>
			
			</div>
			<div class="row">
			
					<div class="row">
						<div class="input-field">
							<textarea id="Nombre" name="nombre" class="materialize-textarea"></textarea>
							<label for="Nombre">nombre</label>
						</div>
					</div>
			
			</div>
			<div class="row">
			
					<div class="row">
						<div class="input-field">
							<textarea id="apellido" name="apellido" class="materialize-textarea"></textarea>
							<label for="apellido">apellido</label>
						</div>
					</div>
			
			</div>
			<div class="row">
			
					<div class="row">
						<div class="input-field ">
							<select name="sexo">
								<option value="1">Masculino</option>
								<option value="0">Femenino</option>
							</select>
							<label>Sexo</label>
						</div>
					</div>
			
			</div>
        
			<div class="row">
			
					<div class="row">
						<div class="input-field">
							<textarea id="correo" name="correo" class="materialize-textarea"></textarea>
							<label for="correo">correo</label>
						</div>
					</div>
				
			</div>
			

		</div>
		<div class="col s12 m6 l6">
			<div class="row">
				
					<div class="row">
						<div class="input-field">
							<textarea id="usuario" name="usuario" class="materialize-textarea"></textarea>
							<label for="usuario">Usuario</label>
						</div>
					</div>
				
			</div>
			<div class="row">
				
					<div class="row">
						<div class="input-field">
							<textarea id="contrasena" name="contrasena" class="materialize-textarea"></textarea>
							<label for="contrasena">Contraseña</label>
						</div>
					</div>
				
			</div>
			<div class="row">
				<div class="row">
					<div class="row">
						
							<div class="row">
								<div class="file-field input-field">
									<div class="btn">
										<span>Fotografía</span>
										<input type="file" name="rutafoto">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text">
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>


		
			<div class="row">
			
					<div class="row">
						<div class="input-field ">
							<select name="tipousuario">
								<option value="0">Administrador</option>
								<option value="1">Cliente</option>
							</select>
							<label>Tipo De Usuario</label>
						</div>
					</div>
				
			</div>

			
	
</div>
		
</div>
<div class="row">
<div class="col s12 ">
<div class="col s6 l3"><button class="btn waves-effect waves-light" type="submit" name="select">Select<i class="material-icons right">send</i></button></div>
		
	
<div class="col s6 l3"><button class="btn waves-effect waves-light" type="submit" name="insert">insert<i class="material-icons right">send</i></button></div>

<div class="col s6 l3"><button class="btn waves-effect waves-light" type="submit" name="update">update<i class="material-icons right">send</i></button></div>
<div class="col s6 l3"><button class="btn waves-effect waves-light" type="submit" name="delete">delete<i class="material-icons right">send</i></button></div>
</form>

</div>
</div>


	<table class="striped table-margin centered responsive-table">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="name">Nombre</th>
              <th data-field="lastname">apellido</th>
              <th data-field="Sexo">Sexo</th>
              <th data-field="correo">correo</th>
              <th data-field="user">usuario</th>
              <th data-field="pass">contraseña</th>
              <th data-field="img">Fotografía</th>
              <th data-field="tipo">tipo Usuario</th>
          </tr>
        </thead>
        <tbody>
        	<?php 
        		include '../procesos/conexion.php';
        		$sql = mysql_query("SELECT * FROM usuario");
        		while ($rows = mysql_fetch_array($sql)) {
        			$id= $rows['idUsuario'];
        			$nombre = $rows['nombre'];
        			$apellido = $rows['apellido'];
        			$sexo = $rows['sexo'];
        			$correo=$rows['correo'];
        			$usuario=$rows['usuario'];
        			$contrasena=$rows['contrasena'];
        			$foto=$rows['rutaFoto'];
        			$tipousuario=$rows['privilegio'];
        			if ($tipousuario == 1) {
        				$tuser = "Administrador";
        			}else{
        				$tuser = "Usuario";
        			}
        			echo $foto;
        			echo "<tr>
        					<td>$id</td>
        					<td>$nombre</td>
        					<td>$apellido</td>
        					<td>$sexo</td>
        					<td>$correo</td>
        					<td>$usuario</td>
        					<td>$contrasena</td>
        					<td><img src='".$foto."' width='100px'></td>
        					<td>$tuser</td>
        				  </tr>";
        		}
        	 ?>
          
        </tbody>
      </table>
</section>
 <script>
 $(document).ready(function() {
    $('select').material_select();
  });
 </script>
