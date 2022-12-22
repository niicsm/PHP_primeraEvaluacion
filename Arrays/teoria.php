<html>

<head>
    <link rel="stylesheet" href="intro.css">
</head>

<body>
    <!---->
    <?php
    // Formas de declarar
    //Escalares
    $q = array(1, 2, 3, 4, 5);
    $w = array("1", "2", "3", "4", "5");
    //Asociativos
    $e = array(
        "1" => "Uno",
        "2" => "Dos",
        "3" => "Tres",
        "4" => "Cuatro",
        "5" => "Cinco"
    );
    $r = [
        "1" => "Uno",
        "2" => "Dos",
        "3" => "Tres",
        "4" => "Cuatro",
        "5" => "Cinco"
    ];


    //Anidados
    $array = array(
        "1" => "Uno",
        2    => 24,
        "multi" => array(
            "dimensional" => array(
                "3" => "foo"
            )
        )
    );

    // Formas de imprimir
    var_dump($e);echo "<br><br>";
    var_dump($array["multi"]["dimensional"]["3"]); // La otra forma en la linea 67 
    echo "<br><br>";

    print_r($q);
    echo "<br><br>";

    for ($i = 0; $i < count($q); $i++) {
        echo $q[$i] . " ";
    }
    echo "<br><br>";

    foreach ($q as $key => $value) {
        echo "[" . $key . "] => " . $value . "<br>";
    }
    echo "<br><br>";

    foreach ($array as $key0 => $value0) {
        foreach ($value0 as $key1 => $value1) {
            foreach ($value1 as $key2 => $value2) {
                echo "[" . $key2 . "] => " . $value2 . "<br>";
            }
        }
    }
    echo "<br><br>";
    
    


    ?>
</body>

</html>
<!---->