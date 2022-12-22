<html>

<head>
    <title>Calculos </title>
</head>

<body style="background-color: green;">
    <?php
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    $apellido = $_GET["apellido"];

    if (empty($nombre)) {
        $nombre = "Esta vacio";
    }
    if (empty($apellido)) {
        $apellido = "Esta vacio";
    }
    if (empty($edad)) {
        $edad = "Esta vacio";
    }
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
    echo "Edad: " . $edad . "<br>";

    $num1 = $_REQUEST["num1"];
    $num2 = $_REQUEST["num2"];

    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Alguno de los inputs no es un numero";
    } else {
        $suma = $num1 + $num2;
        echo "La suma es " . $suma;
    }

    $user = $_REQUEST["user"];
    $password = $_REQUEST["password"];

    echo "<br>Usuario: " . $user . "<br> Contraseña: " . $password;

    $array = array("nico" => "a", "alex" => "b");
   
        if ($password === $array[$user]) {
            header("Location:principal.php");
        } else {
            header("Location:error.php");
        }
    




    // Escribe un fichero php que reciba dos parametros, 
    // y muestre su suma
    ?>

    
</body>

</html>