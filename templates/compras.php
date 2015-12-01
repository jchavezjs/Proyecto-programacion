<section id="sc" class="sc">
  <h3 class="section-title center" >
    
    Inventario </h3> 
</section>
<section id="tablasc" class="tablasc" >
  <table id="tabla" class=" bordered striped centered responsive-table">
  <thead>
          <tr><th data-field="image">Imágen</th>
              <th data-field="producto">Producto</th>
              <th data-field="descripcion">Descripcion</th>
              <th data-field="precio">Precio</th>
              <th data-field="cantidad">Cantidad</th>
          </tr>
        </thead>

        <tbody>
        <?php 
          include '../procesos/conexion.php';
          $sql = mysql_query("SELECT * FROM producto");
          while ($row = mysql_fetch_array($sql)) {
            $idProducto = $row['idProducto'];
            $foto = $row['rutaFoto'];
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $sql1 = mysql_query("SELECT SUM(cantidad) FROM entrada Where idProducto='$idProducto'");
            $cantidad1 = mysql_result($sql1, 0);
            $sql2 = mysql_query("SELECT SUM(cantidad) FROM salida Where idProducto='$idProducto'");
            $cantidad2 = mysql_result($sql2, 0); ;
            echo "<tr>
              <td><img class='materialboxed image-cart' src='$foto'></td>
              <td><p class='promo-caption'>$nombre</p></td>
              <td><p class='promo-caption'>$descripcion</p></td>
              <td><p class='promo-caption'>$". $precio ."</p></td>
              <td><p class='promo-caption'>".($cantidad1 - $cantidad2)."</p></td>
            </tr>";
          }
        ?>
          
        </tbody>
      </table>
</section>
<script>
  $(document).ready(function() {
    $('select').material_select();
    $('.materialboxed').materialbox()
  });
</script>