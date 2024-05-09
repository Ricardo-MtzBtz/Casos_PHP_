<?php
session_start();

if ($_POST['txtUsuario'] == 'Richi' and $_POST['txtClave'] == '2851')
    $_SESSION['admin'] = $_POST['txtUsuario'];
else
    $_SESSION['error'] = 'Usuario incorrecto';

header('location:index.php');
?>