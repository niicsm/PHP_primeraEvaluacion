<?php
$transportes = array("coche", "moto", "autobus", "bicicleta", "furgoneta", "camion", "tren", "avion", "helicoptero", "barco");
$colores = array("negro", "blanco", "azul", "rojo", "verde", "naranja", "amarillo", "rosa", "morado", "gris");
$frutas = array("platano", "manzana", "pera", "sandia", "melon", "kiwi", "fresas", "piña", "cerezas", "ciruela");

$randTrasnporte= $transportes[array_rand($transportes)];
$randColor = $colores[array_rand($colores)];
$randFruta = $frutas[array_rand($frutas)];

$db = new mysqli("localhost", "root", "", "clase");
if (!$db->connect_errno) {
    echo "Conexión realizada";
} else {
    echo "Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}


/*$stmt = $db->prepare("INSERT INTO temas VALUES (?, ?, ?)");
$stmt->bind_param('ssi', $transportes1, $colores1, $frutas1);

for ($i=0; $i < 10; $i++) { 
    $transportes1 = $transportes[$i];
    $colores1 = $colores[$i];
    $frutas1 = $frutas[$i];

    $stmt->execute();
}
echo "hecho";*/
// Borrar BBDD --- DELETE FROM table list
// ACTUALIZAR CAMPOS --- UPDATE table name SET field name  = some value

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $strEleccion = $_POST['choice'];
    $eleccion = strtolower($strEleccion);

    if($eleccion === 'frutas' || $eleccion === 'colores' || $eleccion === 'transportes'){
        session_start();
        $_SESSION["rands"] = array($randTrasnporte,$randColor,$randFruta);
        $_SESSION["numPartidas"] = 1;
        if($eleccion === 'frutas'){
            
        }elseif ($eleccion === 'colores') {
            
        }else{
            header("Location:juegos\juegoTransporte.php");
        }
    }else{
        $err = true;
    }
    /*if ($randFruta) {
        
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: sesiones1_principal.php");
    } else {
        $err = true;
        $usuario = $_POST['usuario'];
    }*/
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
<?php if (isset($err) and $err == true) {
        echo "<p> Palabra incorrecta</p>";
    } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <span><b> Elige uno de estos temas:</b> Transportes || </span>
        <span>Colores || </span>
        <span>Frutas</span>
        <br><input type="text" name="choice">
        <input type="submit">
    </form>
</body>

</html>