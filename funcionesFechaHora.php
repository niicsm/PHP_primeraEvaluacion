<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="intro.css">
</head>

<body>
    <!---->
    <?php
    $time = time();
    echo $time."<br>";

    $fecha = date("d-m-Y H:i:s", $time);
    echo $fecha;

    $microtime = microtime();
    echo $time."<br><br>";

    $tableTime = getDate();
    print_r($tableTime);

    //$fechaMicro = date("d-m-Y H:i:s:ml", $microtime);
    //echo $fechaMicro."<br>";

    echo strtotime("1 Jan 1970");
    echo "<br><br>";
    //Ejercicio 1
    $hora = time();
    echo date("l", time())."<br><br>";
    echo date("l jS \of F Y h:i:s A", time())."<br><br>";
    echo date("l, jS  F Y h:i:s A", time())."<br><br>";
    echo date("F j, Y, h:i a", time())."<br><br>";
    echo date("m.d.y", time())."<br><br>";
    echo date("j, n, Y", time())."<br><br>";
    echo date('Ymd')."<br><br>";
    echo date('\i\t\ \i\s \t\h\e\ jS \d\a\y', time())."<br><br>";
    echo date("r, F Y h:i:s A", time())."<br><br>";

    /*
    Sunday
    Sunday 03rd of May 2009 08:22:51 PM	
    Sunday, 03 de May de 2009 08:22:51 PM
    May 3, 2009, 8:22 pm
    05.03.09
    3, 5, 2009
    20090503
    it is the 3rd day.
    Sun May 3 20:22:51 CEST 2009
    20:05:51 pm 
    20:22:51*/

    
    



    ?>
</body>

</html>
<!---->