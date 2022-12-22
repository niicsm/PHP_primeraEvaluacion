<?php
require_once 'bd.php';
include 'sesiones.php';
comprobar_sesion();
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temas = array("transportes", "colores", "frutas");
    $strEleccionTrans = $_POST['temas'];
    $strEleccionTrans = strtolower($strEleccionTrans);
    
    if ($strEleccionTrans === 'frutas' || $strEleccionTrans === 'colores' || $strEleccionTrans === 'transportes') {
        session_start();
        $_COOKIE['numPartidas']++;
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
        
        form{
            width: 25%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            margin-top: 50px;
        }
        input{
            width: 150px;
            height: 75px;
            font-size: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        input:hover{
            transform: scale(1.1);
            transition-duration: 0.5s;
            background-color: #E5E5E5;
            
        }
    </style>
    <div class="main">
        <h2>Enunciado:</h2>
        <p>El juego consiste en adivinar una palabra de los temas transportes, colores o frutas. Si fallas, se irán mostrando varias pistas.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Elige uno de estos temas:</h2>    
            <input type="submit" value="Transportes" name="temas">
            <input type="submit" value="Colores" name="temas">
            <input type="submit" value="Frutas" name="temas">
        </form>
    </div>
        
</body>
</html>