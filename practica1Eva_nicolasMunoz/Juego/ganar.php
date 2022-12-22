<?php
include 'sesiones.php';
comprobar_sesion();
require_once 'bd.php';
include 'header.php';
setNumeroPartidas($nombreUser, $partidasJugadas);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temas = array("transportes", "colores", "frutas");
    $strEleccionTrans = $_POST['temas'];
    $strEleccionTrans = strtolower($strEleccionTrans);

    if ($strEleccionTrans === 'frutas' || $strEleccionTrans === 'colores' || $strEleccionTrans === 'transportes') {
        session_start();
        $_SESSION["numPartidas"] = 0;
        if ($strEleccionTrans === 'frutas') {
            $tema = obtenerTema($temas[2]);
            $_SESSION["rands"] = $tema[array_rand($tema)];
            header("Location:juegoFrutas.php");
        } elseif ($strEleccionTrans === 'colores') {
            $tema = obtenerTema($temas[1]);
            $_SESSION["rands"] = $tema[array_rand($tema)];
            header("Location:juegoColores.php");
        } else {
            $tema = obtenerTema($temas[0]);
            $_SESSION["rands"] = $tema[array_rand($tema)];
            header("Location:juegoTransporte.php");
        }
    }
    
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        form {
            width: 25%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            margin-top: 50px;
        }

        input {
            width: 125px;
            height: 30px;
            font-size: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        input:hover {
            transform: scale(1.1);
            transition-duration: 0.5s;
            background-color: #E5E5E5;
        }

        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .ranking{
            margin-top: 20px;
            color: blue;
        }
        .intentos{
            color: green;
        }
    </style>
    <div class="main">
        <?php
        echo "<h2>¡Has ganado!<h2>";
        echo "<p class='intentos'>Numero de intentos " . $_SESSION["numPartidas"] . "<p>";
        if ($recordArray['record'] > $numPartidas) {
            echo "<p>Bastiste el record. Has necesitado " . $_SESSION["numPartidas"] . " intentos</p>";
            setRecord($numPartidas, $nombreUser);
        } elseif ($recordArray['record'] == $numPartidas) {
            echo "Casi bastes el record";
        }


        $rankingJugadores = getRankingJugadores();
        echo "<h2 class='ranking'>Ranking actual</h2><table id='ranking'><tr><th>Usuario</th><th>Record</th></tr>";
        foreach ($rankingJugadores as $key => $value) {
            echo "<tr>";
            foreach ($value as $key1 => $value1) {
                echo "<td align='center'>$value1</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <span><b> Elige uno de estos temas:</b></span>
                <input type="submit" value="Transportes" name="temas">
                <input type="submit" value="Colores" name="temas">
                <input type="submit" value="Frutas" name="temas"><br>
        </form>
    </div>
</body>

</html>