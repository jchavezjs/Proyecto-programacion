
<?php
  session_start();
  include 'conexion.php';
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
              $imagen=$f['rutaFoto'];
              $descripcion=$f['descripcion'];
            }
            $datosNuevos=array('Id'=>$_GET['id'],
                    'Nombre'=>$nombre,
                        'Descripcion'=>$descripcion,
                        'Precio'=>$precio,
                        'Imagen'=>$imagen);

            array_push($arreglo, $datosNuevos);
            $_SESSION['carrito']=$arreglo;
            echo "<script>window.location='../#/carrito'</script>";
            
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
        $imagen=$f['rutaFoto'];
        $descripcion=$f['descripcion'];
      }
      $arreglo[]=array('Id'=>$_GET['id'],
              'Nombre'=>$nombre,
                        'Descripcion'=>$descripcion,
                        'Precio'=>$precio,
                        'Imagen'=>$imagen);
      $_SESSION['carrito']=$arreglo;
      echo "<script>window.location='../#/carrito'</script>";
    }
  }
?>