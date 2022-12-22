<?php

//color blanco prohibido
function c_color($color)
{
    if ($color == '#ffffff') {
        echo "<br>Color: Incorrecto, debe ser distinto de blanco<br>";
    }
}
//color blanco prohibido
function c_buscar($buscar)
{
}
//Nombre: empieza por mayus - min3 max 20
function c_nombre($nombre)
{
    if (!ctype_upper(substr($nombre, 0, 1))) {
        echo "La primera letra del nombre debe ir en mayus";
    }
    if (strlen($nombre) < 3 or strlen($nombre) > 20) {
        echo "El nombre debe tener mas 3 y menos de 20 caracteres";
    }
}
//apellido igual que nombre
function c_apellido($apellido)
{
    if (!ctype_upper(substr($apellido, 0, 1))) {
        echo "La primera letra del apellido debe ir en mayus";
    }
}

//email que tenga arroba
function c_email($email)
{
    if (strpos($email, '@') == false) {
        echo "<br>Error: Debe tener una @<br>";
    }
}
//fecha: año mayor de 1900
function c_fecha($fecha)
{
    $a = strtotime("01-01-1900");
    if (strtotime($fecha) <= $a) {
        echo "La fecha debe ser por encima del año 1900";
    }
}



//edad mayor o igual de 18
function c_edad($edad)
{
    if (empty($edad)) {
        echo "Completa el campo Edad<br>";
        $bool = true;
    } else if ($edad < 18) {
        echo "<br>Edad: Incorrecta, debe ser mayor de 18";
    }
}
