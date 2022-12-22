<?php

// ej: http://localhost/webservice/webservice.php?nombre=Pepe&peso=75&estatura=183


//definimos con header el tipo del documento (JSON)
header("Content-Type:application/json");

//recojemos variables
$num1 = 2;
$num2 = 3;
$potencia = 0;

//validamos varaiables vacias
if (!empty($num1) && !empty($num2)) {
    $potencia = pow($num1, $num2);
    respuesta_entregada(200, "Potencia:  $potencia", $potencia);
} else {
    respuesta_entregada(200, "nombre, peso o estatura no validos", null);
}

//funcion que crea la respuesta, con estado, mensaje de estados y datos
function respuesta_entregada($estado, $mensaje_estado, $datos)
{
    //cabecera respuesta
    header("HTTP/1.1 $estado $mensaje_estado");

    //rellenamos array con estado, mensaje y datos
    $respuesta['estado'] = $estado;
    $respuesta['mensaje_estado'] = $mensaje_estado;
    $respuesta['datos'] = $datos;

    //codificamos el json
    $respuesta_json = json_encode($respuesta);

    //pintamos el contenido del json
    echo $respuesta_json;
}
