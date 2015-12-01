<?php
  session_start();
  include '../procesos/conexion.php';
  if(isset($_SESSION['carrito'])){
    if(isset($_GET['id'])){
          $arreglo=$_SESSION['carrito'];
           $nombre="";
            $precio=0;
            $imagen="";
            $descripcion="";
            $re=mysql_query("select * from producto where idProducto=".$_GET['id']);
            while ($f=mysql_fetch_array($re)) {
              $nombre=$f['nombre'];
              $precio=$f['precio'];
              $imagen=$f['imagen'];
              $descripcion=$f['descripcion'];
            }
            $datosNuevos=array('Id'=>$_GET['id'],
                    'Nombre'=>$nombre,
                        'Descripcion'=>$descripcion,
                        'Precio'=>$precio,
                        'Imagen'=>$imagen);

            array_push($arreglo, $datosNuevos);
            $_SESSION['carrito']=$arreglo;
}
  }else{
    if(isset($_GET['id'])){
      $nombre="";
      $precio=0;
      $imagen="";
      $re=mysql_query("select * from producto where idProducto=".$_GET['id']);
      while ($f=mysql_fetch_array($re)) {
        $nombre=$f['nombre'];
        $precio=$f['precio'];
        $imagen=$f['imagen'];
      }
      $arreglo[]=array('Id'=>$_GET['id'],
              'Nombre'=>$nombre,
                        'Descripcion'=>$descripcion,
                        'Precio'=>$precio,
                        'Imagen'=>$imagen);
      $_SESSION['carrito']=$arreglo;
    }
  }
?>
<section id="sc" class="sc">
  <h3 class="section-title center" >
    
    Mi carrito </h3> 
</section>
<section id="tablasc" class="tablasc" >

  <?php
      if(isset($_SESSION['carrito'])){
      $datos=$_SESSION['carrito'];
  ?>

  <table id="tabla" class=" bordered striped centered responsive-table">
  <thead>
          <tr><th data-field="image">Imágen</th>
              <th data-field="producto">Producto</th>
              <th data-field="descripcion">Descripcion</th>
              <th data-field="precio">precio</th>
              <th data-field="cantidad">cantidad</th>
          </tr>
        </thead>
        <tbody>
        <?php
          for ($i=0; $i <count($datos) ; $i++) { 
        ?>
          <tr>
            <td><img class="materialboxed image-cart" src="<?php echo $datos[$i]['Imagen'];?>"></td>
            <td><p class="promo-caption"><?php echo $datos[$i]['Nombre'];?></p></td>
            <td><p class="promo-caption"><?php echo $datos[$i]['Descripcion']?></p></td>
            <td><p class="promo-caption"><?php echo $datos[$i]['Precio']?></p></td>
            <td>
            <div class="input-field">
    <select>
    <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
      </td>
      <td>    <a class="waves-effect waves-light light-green btn espacio"><i class="material-icons right ">delete</i>Eliminar</a></td>
          </tr>
          <?php }?>
            <td></td>
            <td></td>
            <td><strong>Total</strong></td>
            <td><strong><p class="promo-caption">$201.00</p></strong></td>
            <td></td>
            <td><a class="waves-effect waves-light  btn espacio"><i class="material-icons right ">check_circle</i>Confirmar compra</a></td>
        </tbody>
      </table>

    <?php
  }else{
    echo "<h4 style='text-align:center;'>No hay productos seleccionados</h4>";
  }
  ?>
</section>
<script>
  $(document).ready(function() {
    $('select').material_select();
    $('.materialboxed').materialbox()
  });
</script>