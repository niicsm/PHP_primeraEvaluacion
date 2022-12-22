<html>

<head></head>

<body>
    <?php
    //Ejercicio 6
    $array1 = array(100, 99, 50, 343, "100", 13, 22, 4, 6, 50, 100, 343, "99");
    $c = 0;
    $array2 = array();
    for ($i = 0; $i < count($array1); $i++) {
        $c = 0;
        for ($j = 0; $j < count($array1); $j++) {
            if ($array1[$i] == $array1[$j]) {
                $c++;
                
            }
            
            $array2[$i] = $c;
        }
    }
    print_r($array2);
    echo "<br><br>";
    //Ejercicio 7
    $array = array(
        array("10", 11, 100, 100, "a"),
        array(   1,  2, "2",   3,   1)
       );    
    $c1 = 0;
    $c2 = 0;
    $arrayy = array();
    foreach ($array as $key => $value) {
        foreach ($value as $key1 => $value1) {
            $c2++;
            $arrayy[$c2] = $value1;
        }
    }
    $arrayy2 = array();
    for ($i=0; $i < count($array); $i++) { 
        if ($arrayy[$i] == $array1[$i]) {
            $c++;
            
        }
        
    }
    print_r($arrayy);



    ?>
</body>

</html>