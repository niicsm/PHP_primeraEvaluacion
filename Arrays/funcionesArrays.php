<html>

<head>
    <link rel="stylesheet" href="intro.css">
</head>

<body>
    <!---->
    <?php
    //Escalares
    $q = array(1, 2, 4, 3, 5);
    $w = array("1", "2", "3", "4", "5");
    $info = array('café', 'marrón', 'cafeína');
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

    //Funcinones
    echo count($array); // Numero de posiciones que tiene el array
    echo "<br><br>";
    echo sizeof($array); // Numero de posiciones que tiene el array

    echo "<br><br>";
    print_r(array_keys($array)); //Devuelve un array escalar con todas las claves 
    echo "<br><br>";
    print_r(array_keys($array, 24)); //Devuelve un array escalar con todas las claves filtrando por valor

    echo "<br><br>";
    print_r(array_values($array)); //Devuelve un array escalar con todas los valores 

    echo "<br><br>";
    list($bebida, $color, $energía) = $info; //Asigna a una lista de variables el contenido de un array  escalar
    echo "El $bebida es $color y la $energía lo hace especial.\n";
    echo "<br><br>";

    //Funcinones para el puntero

    $mode = current($q); echo $mode."  "; // El valor del elemento del puntero actual
    $mode = next($q); echo $mode."  "; // Avanza el puntero interno una posición 
    $mode = prev($q); echo $mode."  "; // Retrocede el puntero interno una posición 
    $mode = end($q); echo $mode."  ";  // Situa el puntero interno en el último elemento de un array escalar  
    $mode = key($q); echo $mode."  ";  // Devuelve el índice de la posición actual
    $mode = reset($q); echo $mode."  "; // Situa el puntero interno en el primer elemento de un array
    echo "<br><br>";


    //Funcinones para ordenacion

    sort($q); // Ordenación alfanumérica de los valores de un array de menor a mayor.
    // SORT_REGULAR, SORT_NUMERIC, SORT_STRING, SORT_NATURAL...
    print_r($q);echo "<br><br>";

    rsort($q); // Igual que sort pero de mayor a menor
    print_r($q);echo "<br><br>";

    asort($q); // Ordenación  alfanumérica de los valores de un array de menor a mayor manteniendo la correspondencia de los índices con los valores
    print_r($q);echo "<br><br>";

    arsort($q); // Igual que arsort pero de mayor a menor
    print_r($q);echo "<br><br>";

    ksort($q); // Igual que arsort pero de mayor a menor
    print_r($q);echo "<br><br>";

    krsort($q); // Igual que ksort pero de mayor a menor
    print_r($q);echo "<br><br>";

    natsort($q);
    print_r($q);echo "<br><br>";

    natcasesort($q);
    print_r($q);echo "<br><br>";

    shuffle($q);
    print_r($q);echo "<br><br>";

    array_rand($q);
    print_r($q);echo "<br><br>";
    
    array_multisort($array);
    print_r($array);echo "<br><br>";

    /*usort($q, 'funcion');
    print_r($q);echo "<br><br>";

    uasort($q, 'funcion');
    print_r($q);echo "<br><br>";

    uksort($q, 'funcion');
    print_r($q);echo "<br><br>";*/

    //Funcinones para MODIFICACIONES EN ARRAYS

    print_r(array_merge($info, $w));
    echo "<br><br>";

    print_r(array_pad($q, 7, 0));
    echo "<br><br>";

    



    ?>
</body>

</html>
<!---->