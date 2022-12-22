<html>

<head>
    <link rel="stylesheet" href="intro.css">
</head>

<body>
    <!---->
    <?php 
        /*echo "Hola mundo (PHP)"."<br>";
        echo "Numero aleatorio: " ;
        echo rand(0,100);*/ 

        /*$entero = 4;
        $numero = 4.5;
        $cadena = "cadena";
        $bool = TRUE;
        $a = 5;
        echo gettype($a);
        echo "<br>";
        $a = "Hola";
        echo gettype($a);*/ 

        /*echo PHP_INT_SIZE.'<br>';
        echo PHP_INT_MIN.'<br>';
        echo PHP_INT_MAX.'<br>';
        $a = 0b100;
        $a = 0100;
        $a = 0x100;
        $a = 3/2;
        echo $a.'<br>';
        $b = 7.5;
        $a = (int)$b;
        echo $a.'<br>';
        $b = 7e2;
        $b = 7E2;*/ 

        /*echo "Ruta dentro de htdocs: ".$_SERVER['PHP_SELF'].'<br>';
        echo "Nombre del servidor: ".$_SERVER['SERVER_NAME'].'<br>';
        echo "Software de servidor: ".$_SERVER['SERVER_SOFTWARE'].'<br>';
        echo "Protocolo: ".$_SERVER['SERVER_PROTOCOL'].'<br>';
        echo "Metodo de la peticion: ".$_SERVER['SERVER_PROTOCOL'];*/

        // Estos son arrays asociativos

        /*$a = 3;
        $b = "3";
        if($a == $b){
            echo "Son iguales <br> ";
        }else{
            echo "No son iguales <br> ";
        }
        if($a === $b){
            echo "Son identicos <br> ";
        }else{
            echo "No son identicos <br> ";
        }*/
        
      /* $e1 = 0b01;
       $e2 = 0b00;
       $e3 = 0b11;
       $e4 = 0b10;

       echo $e1 & $e2;
       echo $e1 | $e2;
       echo $e1 ^ $e3;

       echo $e4 >>1*/

       //Operaciones en binario

       /*$a  "variable del principal";
       requiere "ejercicio.php";
       $b = "otra variable del principal"
       echo "En el script principal";*/

       /*echo "Arrays";
       echo"<br>";
       echo"<br>";
       $arr1 = [
            0 => 444,
            1 => 222,
            2 => 333

       ];
       print_r($arr1);
       echo "<br>"."pos0: ". $arr1[0]."<br>";

       $arr1[0]=555;
       print_r($arr1);
       echo "<br>";
       $arr2 = array (
        "1111A" => "Juan",
        "1112A" => "Maria",
        "1113A" => "Ana"

       );
       $arr2["1113A"] = "Paco";
       print_r($arr2);

       foreach ($arr2 as $nombre){
        echo "<br> $nombre";
       }

       echo "<br>";
       foreach ($arr2 as $codigo => $nombre){
        echo "<br> Código: $codigo Nombre: $nombre";
       }

       echo "<br>";
       foreach ($arr2 as $codigo => $nombre){
        echo "<br>.  Código: $codigo Nombre: $nombre";
       }

       $arr3 = array(
        "Viernes" => 22,
        "Sabado" => 34
        );
    echo "<br>";
    echo "<br>";
    foreach($arr3 as $cantidad){
        $cantidad = $cantidad * 2;
    }
    
    print_r($arr3);
    echo "<br>";
    echo "<br>";

    foreach($arr3 as &$cantidad){
        $cantidad = $cantidad * 2;
    }
    print_r($arr3); */

    echo "Funciones de variables: <br><br>";

    $a = 0;
    $b = NULL;
    $c = FALSE;
    $d;
    $c = array(
        "1" => "1"
    );


    echo "Variable a: <br><br>Nulo: ";
    var_dump(is_null($a)); echo "<br>";
    echo "Inicializada: ";
    var_dump(isset($a)); echo "<br>";
    echo "Empty: ";
    var_dump(empty($a));
      




        ?>
    <p>Hola mundo (HTML)</p>
    <!--<script>
            alert ("Hola!");

        </script>-->
</body>

</html>
<!---->