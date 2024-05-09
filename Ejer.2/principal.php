<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CONTROL DE EMPLEADOS</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <center>
    <header>
        <?php
        session_start();
        require 'encabezado.php';
        echo "<p id='centrado'>";
        echo 'BIENVENID@, TE ESTAMOS VIGILANDO > ' . $_SESSION['admin'] . '<br>';
        echo "|<a href='cerrar.php'> Cerrar Sesion </a>|";
        echo '</p>';
    ?>
    </header>
    <section>
        <table border="1" width="550" cellspacing="5">
            <tr>
                <td><a href="#">
                        <img src="1.jpg" width="60" height="60" /></a>
                </td>
                <td><a href="#">Registro De Nuevo Empleado</a></td>
            </tr>
            <tr>
                <td><a href="#">
                        <img src="2.jpg" width="60" height="60" /></a>
                </td>
                <td><a href="#">Listado de Empleados</a></td>
            </tr>
            <tr>
                <td><a href="javascript:close()">
                        <img src="3.jpg" width="60" height="60" /></a>
                </td>
                <td><a href="javascript:close()">Salir</a></td>
            </tr>
        </table>
    </section>
    <footer>
        <?php require 'pie.php'; ?>
    </footer>
</center>
</body>

</html>