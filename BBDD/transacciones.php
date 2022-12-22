<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa', 'root', '');
    echo "Conexion realizada" . "<br>";

    $mbd->beginTransaction();

    // UNA FORMA DE HACERLO
    $mbd->exec("insert into antiguos_empleados values ('3','paco')");
    $mbd->exec("delete from antiguos_empleados where id='2'");

    // OTRA FORMA DE HACERLO
    $ins = "insert into antiguos_empleados values ('5','paco')";
    $dlt = "delete from antiguos_empleados where id='3'";
    $res = $mbd ->query($ins);
    $res1 = $mbd ->query($dlt);
  
    $mbd->commit();

    
} catch (PDOException $e) {
    $mbd->rollBack();
    print "¡Error!: " . $e->getMessage() . "<br>";
    die();
}