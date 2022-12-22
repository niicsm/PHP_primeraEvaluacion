<html>

<head>
    <link rel="stylesheet" href="intro.css">
</head>

<body>
 



    <?php
       echo "<b>Ejercicio 2</b>"; 
       $colores["fuertes"] = array (
            "rojo" => "FF0000",
            "verde" => "00FF00",
            "azul" => "0000FF"
       );

        $colores["suaves"] = array (
            "rosa" => "FE9ABC",
            "amarillo" => "FDF189",
            "malva" => "BC8F8F"
        );

        echo "<table border='1'>";
        foreach($colores as $claves => $tipos){
            echo "<tr><td>$claves</td>";
            foreach($tipos as $i => $o ){
                echo "<td BGCOLOR='$o'>$i : $o</td>";
            }
        }
       

    ?>

<?php 
       $miFecha = array(
        array(
            array("13 de enero de 2015", "11 de febrero de 2018"),
            array("13 de enero de 2020", "11 de febrero de 2015"),
        ),
        array(
            array("3 de agosto de 2017", "1 de octubre de 2016"),
            array("3 de agosto de 2013", "1 de octubre de 2019"),
        ),
        array(
            array("10 de junio de 2020", "11 de marzo de 2019"),
        ),
        array(
            array("22 de marzo de 2020", "28 de mayo de 2019"),
            array("22 de marzo de 2019", "28 de mayo de 2018"),
            array("22 de marzo de 2018", "28 de mayo de 2017"),
            array("22 de marzo de 2017", "28 de mayo de 2016"),
        )
        );
        echo "<table border='1'>";
        foreach($miFecha as $claves => $tipos){
            foreach($tipos as $i => $o ){
                foreach($o as $v => $vv){
                    echo $vv."<br>";
                }
            }
        }

        $equipo_futbol = array
 			(
 				array("Rooney","Chicharito","Gigs"),
 				array("Suarez"),
 				array("Torres","Terry","Etoo")
 			);

            foreach($equipo_futbol as $equipos => $jugadores){
                echo"<br>";
                foreach($jugadores as $personas => $vv)
                    echo $vv."<br>";
            }

        $datos = array(
            array(array(0, 0, 0),
                array(0, 0, 1),
                array(0, 0, 2) 
                ),
            array(array(0, 1, 0),
                array(0, 1, 1),
                array(0, 1, 2) 
                ),
                array(array(0, 2, 0),
                array(0, 2, 1),
                array(0, 2, 2) 
                )
            );

            foreach($datos as $datoss => $indoor){
                echo "<br>";
                foreach($indoor as $personas => $vv){   
                    echo "<br>";            
                    foreach($vv as $s => $ss){
                        echo $ss;
                }
            }
        }
        echo "<br>"; 
        echo "<br>"; 
        $supermercado = array("Electrodomesticos" => 
        array("Televisor",  "Heladera"), "Alimentos" => 
        array("Carne", "Leche", "Verduras"));

        foreach($supermercado as $sector => $productos){
            echo "<br><b>".$sector."</b>: ";
            foreach($productos as $p => $pp){
                echo $pp.", ";
            }
        }
        echo "<br>"; 
        echo "<br>"; 
        $productoss=array(
                "Procesador" => array (
                "AMD" => "K7 XP 1800",
                "PENTIUM" => "IV 2,5 Ghz"
                ),
                "Disco_duro" => array(
                "SEAGATE" => "40GB 10000 rpm",
                "SAMSUNG" => "40GB 7200 rpm",
                "WESTERN_DIGITAL" => "60GB 7200 rmp 8MB caché"
                )
        ); 

        foreach($productoss as $componemtes => $i){
            echo "<br><b>".$componemtes."</b>: ";
            foreach($i as $detalles => $j){
                echo "<br><b>".$detalles."</b>: ".$j;
            }
        }

        
        $productos["procesador"]["AMD"][0]="K7 XP 1900";
        $productos["procesador"]["AMD"][1]="K7 XP 1800";
        $productos["procesador"]["AMD"][2]="K7 XP 1700";
        $productos["procesador"]["PENTIUM"][0]="IV 2,5 Ghz";
        $productos["procesador"]["PENTIUM"][1]="IV 2,4 Ghz";
        $productos["procesador"]["PENTIUM"][2]="IV 2,3 Ghz";
        $productos["procesador"]["PENTIUM"][3]="IV 2,2 Ghz";
        $productos["disco_duro"]["SEAGATE"][0]=" 40GB 10000 rpm";
        $productos["disco_duro"]["SEAGATE"][1]=" 80GB 7200 rpm";
        $productos["disco_duro"]["SEAGATE"][2]=" 160GB 7200 rpm";
        $productos["disco_duro"]["SAMSUNG"][0]=" 40GB 7200 rpm";
        $productos["disco_duro"]["WESTERN_DIGITAL"][0]=" 60GB 7200 rpm 8MB cache";
        $productos["disco_duro"]["WESTERN_DIGITAL"][1]=" 80GB 10000 rpm 16MB cache";  

        foreach($productos as $componemtes => $i){
            echo "<br><b>".$componemtes."</b>: ";
            foreach($i as $detalles => $j){
                echo "<br><b>".$detalles."</b>: ";
                foreach($j as $detalless => $jj){
                    echo " <br><b>".$detalless."</b>: ".$jj;
                }
                
            }
        }


    ?>

</body>

</html>
<!---->