<?php
session_start();
$_SESSION['Pregunta3'] = $_POST['preg3'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pregunta 4</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <form method="POST" action="pregunta4.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <th colspan="2">4. ¿Prefieres ver las carreras en televisión, en vivo en el circuito o a través de plataformas de streaming?</th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg4" value="a) En televisión." /> a) En televisión.<br />
                        <input type="radio" name="preg4" value="b) En vivo en el circuito." />b) En vivo en el circuito.<br />
                        <input type="radio" name="preg4" value="c) A través de plataformas de streaming (como Netflix, F1TV, etc.)" />c) A través de plataformas de streaming (como Netflix, F1TV, etc.)<br />
                        <input type="radio" name="preg4" value="d) No tengo preferencia, veo las carreras de cualquier manera." />d) No tengo preferencia, veo las carreras de cualquier manera<br/>
                        <input type="radio" name="preg4" value="e) No suelo ver las carreras." />e) No suelo ver las carreras.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta3.php'" />
                        <input type="submit" value="Siguiente >" onclick="this.form.action = 'pregunta5.php'" />
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