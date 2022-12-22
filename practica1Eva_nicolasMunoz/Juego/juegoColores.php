<?php
require_once 'bd.php';
include 'sesiones.php';
comprobar_sesion();
include 'pistas.php';
include 'header.php';
$temas = array("transportes", "colores", "frutas");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $colores = obtenerTema($temas[1]);
    $strEleccion = $_POST['choice'];
    $eleccion = strtolower($strEleccion);
    $rands = array($_SESSION["rands"]);
    $randClrs =  $rands;;
    $_SESSION["numPartidas"]++;
    echo "<br>Color:<b>" . $randClrs[0] . "</b>";
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
        .mainForm {
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

    <form class="mainForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h3><b> Adivina el metodo el color</b></h3>
        <br><input type="text" name="choice">
        <input type="submit">
        <?php if (isset($err) and $err == true) {
            echo "<p> Palabra incorrecta</p>";
        } ?>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<br>Numero de intentos " . $_SESSION["numPartidas"];
            if ($eleccion == $randClrs[0]) {
                header("Location:ganar.php");
                //session_destroy();
            } else {
                echo "<br>Has fallado!<br>";
                $numeroLetras = "Numero de letras: " . strlen($randClrs[0]);
                $bool = false;
                echo "<div class='pistasContainer'>";
                echo "<h2 class='textPistas'>Pistas</h2>";
                if ($numPartidas == 2) {
                    for ($i = 5; $i < 10; $i++) {
                        if ($randClrs[0] === $colores[$i]) {
                            $bool = true;
                        }
                    }
                    if ($bool) {
                        echo "<p>Pista:" . $pistasColores['pista1'][1] . " // " . $numeroLetras;
                    } else {
                        echo "<p>Pista:" . $pistasColores['pista1'][0] . " // " . $numeroLetras;
                    }
                } else if ($numPartidas > 2) {
                    if ($randClrs[0] === "verde" || $randClrs[0] === "azul" || $randClrs[0] === "rojo") {
                        echo "<p>Pista: " . $pistasColores['pista2'][0] . "</p>";
                    } else if ($randClrs[0] === "azul" || $randClrs[0] === "amarillo" || $randClrs[0] === "morado" || $randClrs[0] === "negro") {
                        echo "<p>Pista: " . $pistasColores['pista2'][1] . "</p>";
                    } else {
                        echo "<p>Pista: " . $pistasColores['pista2'][2] . "</p>";
                    }
                }
            }
        }



        ?>


    </form>
</body>

</html>