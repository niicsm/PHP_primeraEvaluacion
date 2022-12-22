<?php
$nombreUser = $_SESSION['usuario'];
$_SESSION["partidasJugadas"] = getNumeroPartidas($nombreUser);
$partidasJugadas = $_SESSION['partidasJugadas'];
$numPartidas = $_SESSION["numPartidas"];
$recordArray = getRecord($nombreUser);
$hora = $_COOKIE['hora'];
echo "<nav class='mainHeader'>";
echo "<div class='items'><b>Usuario: </b>" . $nombreUser . "</div>";
echo "<div class='items'><b>Partidas jugadas: </b>" . $partidasJugadas . "</div>";
echo "<div class='items'><b>Record: </b>" . $recordArray['record'] . "</div>";
echo "<div class='items'>" . $hora . "</div>";

echo "<form class='out' action='logOut.php' method='post'><div class='items'><input class='CR' type='submit' value='Salir' name='cerrarSesion'></div></form>";
echo "</nav>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <style>
        * {
            padding: 0;
            margin: 0px;
            background-color: white;
            color: black;
            font-family: 'Source Serif Pro', serif;
        }

        .mainHeader {
            width: 100%;
            display: flex;
            background-color: white;
            box-shadow: 1px 2px 6px grey;
            justify-content: space-evenly;
        }

        .items {
            margin: 10px;
            margin-top: 20px;
        }

        .CR {
            margin: 0;
            font-size: 15px;
            width: 100px;
            height: 25px;
        }

        .out {
            margin-top: 0;
            margin: 0;
            height: 25px;
        }
    </style>
</body>

</html>