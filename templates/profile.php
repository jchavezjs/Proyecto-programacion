<?php 
  session_start();
?>
  <div class="row marg">

    <div class="col s12 m4 l3 profile-wrap">
      <section id="avatar" class="avatar">
      <article id="avatar1" class="avatar1">
        <?php echo "<img src='".$_SESSION["ruta"]."' width='230px' height='230px'>";?>
      </article>
        </section>
      </div>




      <div class="col s12 m8 l9 profile-wrap">
        <h3  class="section-title margin">Informacion de <?php echo $_SESSION["nombre"];?></h3>
        <div class="row">
          <div class="col s12 m6"> 
            <form action="procesos/editarCliente.php" method="post">
              <article id="info1" class="info1">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <?php echo "<input name='usuario' value='". $_SESSION["usuario"]."' id='first_name2' type='text' class='validate'>"; ?>
                    <label class="active" for="first_name2">Usuario</label>
                  </div>
                </div>
              </article>
              <article id="info2" class="info2">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">lock_outline</i>
                    <?php echo "<input name='contrasena' value='".$_SESSION["contrasena"]."' id='first_name2' type='password' class='validate'>"; ?>
                    <label class="active" for="first_name2">Contraseña</label>
                  </div>
                </div>
              </article>
              <article id="info3" class="info3">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">account_box</i>
                    <?php echo "<input name='nombre' value='".$_SESSION["nombre"]."' id='first_name2' type='text' class='validate'>";?>
                    <label class="active" for="first_name2">Nombre</label>
                  </div>
                </div>
              </article>
            </div>
            <div class="col s12 m6">
              <article id="info4" class="info4">
                <div class="row">
                   <div class="input-field col s12">
                    <select name="sexo">
                    <?php
                      if ($_SESSION["sexo"]==1){
                      echo "<option value='0'>Mujer</option>
                      <option value='1' selected>Hombre</option>";
                      }else{
                        echo "<option value='0' selected>Mujer</option>
                      <option value='1'>Hombre</option>";
                      }
                    ?>
                    </select>
                    <label>Sexo</label>
                  </div>
                </div>

              </article>
              <article id="info5" class="info5">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <?php echo "<input name='correo' value='".$_SESSION["correo"]."' id='first_name2' type='text' class='validate'>";?>
                    <label class="active" for="first_name2">Email</label>
                  </div>
                </div>
              </article>
    
            
          </div>
        </div>
      </div>
  
      </form>
      </div>
      <script type="text/javascript">
         $(document).ready(function() {
    $('select').material_select();
  });
      </script>