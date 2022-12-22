<?php
include 'sesiones.php';
session_start();    // unirse a la sesión
comprobar_sesion();
session_destroy();    // eliminar la sesion
unset($_COOKIE['hora']); // eliminar la cookie
header("Location: login.php");
