<?php
session_start();
$_SESSION['Pregunta1'] = $_POST['preg1'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pregunta 2</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <form method="POST" action="pregunta2.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <th colspan="2">2. ¿Qué piloto crees que dominará la temporada actual?</th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg2" value="a) Lewis Hamilton" />a) Lewis Hamilton<br />
                        <input type="radio" name="preg2" value="b) Max Verstappen" />b) Max Verstappen<br />
                        <input type="radio" name="preg2" value="c) Charles Leclerc" />c) Charles Leclerc<br />
                        <input type="radio" name="preg2" value="d) Fernando Alonso" />d) Fernando Alonso<br />
                        <input type="radio" name="preg2" value="e) Carlos Sainz" />e) Carlos Sainz<br />
                        <input type="radio" name="preg2" value="f) No estoy seguro" />f) No estoy seguro
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action='pregunta1.php'" />
                        <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta3.php'" />
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php include 'pie.php'; ?>
    </footer>
</body>

</html>