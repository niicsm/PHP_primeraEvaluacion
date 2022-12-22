<?php
session_start();
$nombre = $_SESSION['sesion1'];
echo "Hola ".$nombre;
unset($_SESSION['sesion1']);
echo session_name()."<br>";
echo session_id()."<br>";
?>

