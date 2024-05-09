<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <title></title>
   <link href="estilo.css" rel="stylesheet">
</head>

<body>
   <header>
      <?php include ('encabezado.php'); ?>
   </header>
   <section>
      <table border="1" width="550" cellspacing="10" cellpadding="0">
         <tr>
            <td>
               <img src="fotosProductos/carro.png" width="80" height="80" />
            </td>
         </tr>
         <tr>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
         </tr>
         <?php
         error_reporting(0);
         session_start();
         include ('capturaDatos.php');
         include ('asignaciones.php');
         $codigo = getProducto();
         $cantidad = getCantidad();
         if (!isset($_SESSION[$productos])) {
            $_SESSION[$productos][$codigo] = $cantidad;
         } else {
            foreach ($_SESSION[$productos] as $productos => $cantidad) {
               if ($codigo == $productos) {
                  $_SESSION[$productos][$productos] += $cantidad;
                  $bandera = 1;
               }
               $total += $cantidad;
            }
         }

         if (!$bandera)
            $_SESSION[$productos][$codigo] = $cantidad;

         if (isset($_SESSION[$productos])) {
            $tSubtotal = 0;
            foreach ($_SESSION[$productos] as $codigo => $cantidad) {
               $subtotal = $cantidad * asignaPrecio($codigo);
               $tSubtotal += $subtotal;
               ?>
               <tr>
                  <td id="centrado"><?php echo $codigo; ?></td>
                  <td><?php echo muestraDescripcion($codigo); ?></td>
                  <td id="derecha">
                     <?php echo '$' . number_format(asignaPrecio($codigo), 2); ?>
                  </td>
                  <td id="centrado"><?php echo $cantidad; ?></td>
                  <td id="derecha"><?php echo '$' . number_format($subtotal, 2); ?></td>
               </tr>
               <?php
            }
         }
         ?>
         <tr>
            <td id="resaltado">Total a Pagar</td>
            <td></td>
            <td></td>
            <td></td>
            <td id="totales"><?php echo '$' . number_format($tSubtotal, 2); ?></td>
         </tr>
         <tr>
            <td colspan="4"><?php echo '<a href="index.php">
   Seguir comprando..!! </a>'; ?>
            </td>
            <td colspan="4"><?php echo '<a href="destruir.php">
   Finalizar la compra</a>'; ?>
            </td>
         </tr>
      </table>
   </section>
   <footer>
      <?php include ('pie.php'); ?>
   </footer>
</body>

</html>