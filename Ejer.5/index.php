<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <?php
        error_reporting(0);
        session_start();
        include 'capturaDatos.php'; 
        $producto = getDescripcion();
         
        ?>
        <form name="frmPrincipal" method="POST" action="agregarProducto.php">
            <table border="1" width="600" cellspacing="10" cellpadding="0">
                <tr>
                    <td>Descripción del Producto</td>
                    <td><input type="text" name="txtDescripcion" value="<?php echo getDescripcion(); ?>" size="60" />
                    </td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td><input type="text" name="txtStock" value="<?php echo getStock(); ?>" /></td>
                </tr>
                <tr>
                    <td>Precio de producto</td>
                    <td><input type="text" name="txtPrecio" value="<?php echo getPrecio(); ?>" /></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnListado" onclick="this.form.action = 'listadoProductos.php'"
                            value="Ver listado de productos" />
                    </td>
                    <td><input type="submit" value="Registrar producto" onclick="this.form.action = 'agregarProducto.php'"
                     name='btnRegistrar''          /></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php include 'pie.php'; ?>
    </footer>
</body>

</html>