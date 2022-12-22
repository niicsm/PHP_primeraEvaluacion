<html>

<head>
    <link rel="stylesheet" href="intro.css">
</head>

<body>
    <!---->
    <?php 
$a=7;
$b=&$a;
$c=&$b;
echo   

$a,$b,$c;
$b=8;
echo $a,$b,$c;

?>

    <?php
       echo "<b>Ejercicio 6</b>"; 
       echo "<br>";   
       const pi = 3.14; 
       echo(pi*2.5**2);
       echo "<br>";
       echo "<br>";
    ?>

    <?php 
        echo "Ejercicio 7"; 
        echo "<br>";   
        $dato="prueba";
        echo 'El contenido de la variable $dato es $dato';
        echo "<br>";
        echo "El contenido de la variable $dato es $dato";
        echo "<br>";
        echo "<br>";
    ?>

    <?php 
        echo "Ejercicio 8"; 
        echo "<br>";   
        $simples="simples";
        $dobles="dobles";
        echo "Aquí se pueden añadir comillas $dobles"; 
        echo "<br>";
        echo 'Aquí se pueden añadir comillas '.$simples;
        echo "<br>";
        echo "<br>";
    ?>

    <?php 
        echo "Ejercicio 9"; 
        echo "<br>";
        $variable=NULL;
        if ($variable)  echo "True";
        else echo "False" ;
        echo "<br>";
        echo "<br>";
    ?>
    <?php 
        echo "Ejercicio 10"; 
        echo "<br>";
        $numero = 2.4;
        echo var_dump($numero);
        $numero = TRUE;
        echo var_dump($numero);
        //echo var_dump((bool)$numero);
        echo "<br>";
    ?>



</body>

</html>
<!---->