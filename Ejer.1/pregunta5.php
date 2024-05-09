<?php
session_start();
$_SESSION['Pregunta4'] = $_POST['preg4'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pregunta 5</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <form method="POST" action="pregunta5.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <th colspan="2">5. ¿Qué opinas sobre la introducción de nuevas reglas y tecnologías para mejorar la competitividad y el espectáculo en la Fórmula 1?</th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <input type="radio" name="preg5" value="a) Estoy a favor, creo que son necesarias para mantener el interés" />a) Estoy a favor, creo que son necesarias para mantener el interés<br />
                        <input type="radio" name="preg5" value="b) Estoy en contra, creo que la Fórmula 1 debería conservar sus tradiciones" />b) Estoy en contra, creo que la Fórmula 1 debería conservar sus tradiciones<br />
                        <input type="radio" name="preg5" value="c) Depende de la naturaleza específica de las reglas y tecnologías propuestas" />c) Depende de la naturaleza específica de las reglas y tecnologías propuestas<br />
                        <input type="radio" name="preg5" value="d) No tengo una opinión formada al respecto" />d) No tengo una opinión formada al respecto<br />
                        <input type="radio" name="preg5" value="e) No estoy al tanto de los cambios propuestos" />e) No estoy al tanto de los cambios propuestos<br />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta4.php'" />
                        <input type="submit" value="Siguiente >" onclick="this.form.action = 'resumen.php'" />
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