<?php
session_start();


if (isset($_POST['btnBoton1'])) {
    $_SESSION['mujer1'] += 1;
}
if (isset($_POST['btnBoton2'])) {
    $_SESSION['mujer2'] += 1;
}
if (isset($_POST['btnBoton3'])) {
    $_SESSION['mujer3'] += 1;
}
if (isset($_POST['btnBoton4'])) {
    $_SESSION['mujer4'] += 1;
}


$_SESSION['total'] = $_SESSION['mujer1'] + $_SESSION['mujer2'] + $_SESSION['mujer3'] + $_SESSION['mujer4'] ;


header('Location: index.php');
exit(); 
?>