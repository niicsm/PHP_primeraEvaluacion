<?php
    $mbd = new PDO('mysql:host=localhost;dbname=empresa', 'root', '');
    echo "Conexion realizada" . "<br>";

    $preparada = $mbd ->prepare("select * from usuarios where nombre = ?");
    if($preparada ->execute(array($_GET['name']))){
        while($fila = $preparada->fetch()){
            print_r($fila);
        }
    }

?>