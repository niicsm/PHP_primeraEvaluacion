<?php
require_once 'bd.php';
include 'sesiones.php';
comprobar_sesion();
include 'pistas.php';
include 'header.php';
$temas = array("transportes", "colores", "frutas");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $transportes = obtenerTema($temas[0]);
    $strEleccion = $_POST['choice'];
    $eleccion = strtolower($strEleccion);
    $rands = array($_SESSION["rands"]);
    $randTrans =  $rands; //"bicicleta";
    $_SESSION["numPartidas"]++;
    echo "<br>Método de transporte:<b>" . $randTrans[0] . "</b>";

   
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
        .mainForm{
            width: 25%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            margin-top: 50px;
        }

        input {
            width: 150px;
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
    </style>
    <?php if (isset($err) and $err == true) {
        echo "<p> Palabra incorrecta</p>";
    } ?>
    <form class="mainForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h3><b> Adivina el metodo de transporte</b></h3>
        <br><input type="text" name="choice">
        <input type="submit">
        <?php if (isset($err) and $err == true) {
            echo "<p> Palabra incorrecta</p>";
        } ?>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<br>Numero de intentos " . $_SESSION["numPartidas"];
            if ($eleccion == $randTrans[0]) {
                header("Location:ganar.php");
                //session_destroy();
            } else {
                echo "<br>Has fallado!<br>";
                $numeroLetras = "Numero de letras: " . strlen($randTrans[0]);
                $bool = false;
                echo "<div class='pistasContainer'>";
                echo "<h2 class='textPistas'>Pistas</h2>";
                if ($numPartidas == 2) {
                    for ($i = 6; $i < 10; $i++) {
                        if ($randTrans[0] === $transportes[$i]) {
                            $bool = true;
                        }
                    }
                    if ($bool) {
                        echo "<p>Pista:" . $pistasTransportes['pista1'][1] . " // " . $numeroLetras;
                    } else {
                        echo "<p>Pista:" . $pistasTransportes['pista1'][0] . " // " . $numeroLetras;
                    }
                } else if ($numPartidas > 3) {
                    if ($randTrans[0] === "bicicleta" || $randTrans[0] === "tren") {
                        if ($randTrans[0] === "bicicleta") {
                            echo "<p>Pista:" . $pistasTransportes['pista1'][0] .$numeroLetras. "</p>";
                        } else {
                            echo "<p>Pista:" . $pistasTransportes['pista2'][1] . $numeroLetras . "</p>";
                        }
                        echo "<p>Pista: ". $pistasTransportes['pista2'][4] ."</p>";
                    } else if ($randTrans[0] === "barco") {
                        echo "<p>Pista:" . $pistasTransportes['pista1'][1] . " // " . $numeroLetras;
                        echo "<p>Pista: ". $pistasTransportes['pista2'][2] ."</p>";
                    } else if ($randTrans[0] === "avion" || $randTrans[0] === "helicoptero") {
                        echo "<p>Pista:" . $pistasTransportes['pista1'][1] . " // " . $numeroLetras;
                        echo "<p>Pista: ". $pistasTransportes['pista2'][3] ."</p>";
                    } else {
                        echo "<p>Pista:" . $pistasTransportes['pista1'][0] .$numeroLetras. "</p>";
                        echo "<p>Pista: ". $pistasTransportes['pista2'][0] ."</p>";
                    }
                }
            }
            
        }

        

        ?>


    </form>
</body>

</html>