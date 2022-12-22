<html>

<head>
    <link rel="stylesheet" href="intro.css">
</head>

<body>
    <!---->

    <?php
       $array = array(
        'k0' => 'Juan',
        'k1' => 'Álvaro',
        'k2' => 'Maite',
        'k3' => 'Álvaro',
        'k4' => 'Juan',
        'k5' => 'Martina');

        while ($nombre = current($array)) { 
            if ($nombre == 'Álvaro') { 
            echo key($array).'<br />'; 
            } 
            next($array); 
        } 

        print_r(array_keys($array, "Álvaro"));

        $alumno=array(
            "nombre" => "Jose",
            "apellidos" => "Martínez Roca",
            "telefono" => "96 361 66 54",
            "direccion" => "C/ Arco del triunfo 13",
            "dni" => "22 111 055",
            "num_matricula" => null,
            "facultad" => "Facultad Informática",
            "curso" => "5" 
            );
            echo '<br />';
            end($alumno);
            
            while ($nombre = current($alumno)|| current($alumno)===NULL) { 
                echo current($alumno).' ';  
                prev($alumno); 
            } 

            echo '<br />';
            reset($alumno);
            while ($nombre = current($alumno) || current($alumno)===NULL) { 
                echo current($alumno).' ';  
                next($alumno); 
            } 

        $ciudades[5]='Madrid';
        $ciudades[7]='Ovied';
        $ciudades[]='Cáceres';
        $ciudades[]='Alicante';
        $ciudades[]='Almería';
        $ciudades[]='Zaragoza';
            
        while ($nombre = current($ciudades)) { 
            echo current($ciudades).' ';  
            prev($ciudades); 
        } 

        echo '<br />';
        reset($ciudades);
        while ($nombre = current($ciudades)) { 
            echo current($ciudades).' ';  
            next($ciudades); 
        } 


    ?> 

<?php
      
?> 
    
</body>

</html>
<!---->