<?php
session_start();
$_SESSION['Pregunta5'] = $_POST['preg5'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Resumen</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
        <center>
            <h3>INFORME DE ENCUESTA</h3>
        </center>
    </header>
    <?php
    $nombres = $_SESSION['nombres'];
    $dni = $_SESSION['dni'];
    $pregunta1 = $_SESSION['Pregunta1'];
    $pregunta2 = $_SESSION['Pregunta2'];
    $pregunta3 = $_SESSION['Pregunta3'];
    $pregunta4 = $_SESSION['Pregunta4'];
    $pregunta5 = $_SESSION['Pregunta5'];
    ?>
    <section>
        <form method="POST" action="resumen.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <td>Nombre del ciudadano</td>
                    <td><?php echo $nombres; ?></td>
                </tr>
                <tr>
                    <td>DNI</td>
                    <td><?php echo $dni; ?></td>
                </tr>
                <tr>
                    <td>1. ¿Cuál es tu equipo favorito de Fórmula 1?</td>
                    <td><?php echo $pregunta1; ?></td>
                </tr>
                <tr>
                    <td>2. ¿Qué piloto crees que dominará la temporada actual?</td>
                    <td><?php echo $pregunta2; ?></td>
                </tr>
                <tr>
                    <td>3. ¿Qué aspecto de la Fórmula 1 te resulta más emocionante: las carreras, la tecnología o la estrategia?</td>
                    <td><?php echo $pregunta3; ?></td>
                </tr>
                <tr>
                    <td>4. ¿Prefieres ver las carreras en televisión, en vivo en el circuito o a través de plataformas de streaming?<td><?php echo $pregunta4; ?></td>
                </tr>
                <tr>
                    <td>5. ¿Qué opinas sobre la introducción de nuevas reglas y tecnologías para mejorar la competitividad y el espectáculo en la Fórmula 1?</td>
                    <td><?php echo $pregunta5; ?></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta5.php'" />
                        <input type="submit" value="Volver a encuestar" onclick="this.form.action = 'index.php'" />
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