<?php 
// include 
// require 
// include_once
// require_once 
require_once 'functionlibrary.php';
require_once 'productslibrary.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de Librerias</title>
</head>
<body>
    <h1>Aqui llego</h1>
    <?php
      echo getHelloValue();
      echo '<br/>';
      echo sumTwoNumbers(1,2);
      echo '<br/>';
      echo increment(11,2);
      echo '<br/>';
      echo increment(99);
      echo '<hr>';
      echo '<h1>Arreglos</h1>';
      print_r($arrProductos);
      echo '<hr>';
      print_r($arrFrankenstein);

      /* NO SE DEBE RECORRER ARREGLOS POR MEDIO DE ORDINALES
      for( $i = 0; $i< count($arrFrankenstein); $i++) {
        echo $arrFrankenstein[$i];
      }
      */
      echo '<hr/>';
      foreach($arrFrankenstein as $values) {
        echo $values . '<br/>';
      }

      echo '<hr/>';
      foreach($arrFrankenstein as $key => $value) {
        echo ' - ' . $key . ' : '. $value . '<br/>';
      }
    ?>
    <hr/>
    <table>
      <tr>
        <th>SKU</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Etiquetas</th>
      </tr>
      <?php  
      foreach ($arrProductos as $prod) {
      ?>
      <tr>
        <td><?php echo $prod['sku'] ?></td>
        <td><?php echo $prod['description'] ?></td>
        <td><?php echo $prod['price'] ?></td>
        <td><?php
          foreach($prod["tags"] as $tag) {
            echo $tag . ', ';
          }
        ?></td>
      </tr>
      <?php 
        } //foreach arrProductos 
      ?>
    </table>
</body>
</html>