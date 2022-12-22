<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=empresa', 'root', '');
    echo "Conexion realizada" . "<br>";


        //SELECT
    $slt = "SELECT codigo, nombre from usuarios;";
    $result = $mbd->query($slt);
    foreach ($result as $key) {
        print "<br>Codigo: ".$key['codigo'];
        print "<br>Nombre: ".$key['nombre'];
    }

    //SELECT preparada, parametros por orden
        //Una forma
    $preparada = $mbd ->prepare("select nombre from usuarios where rol = ?");
    $preparada ->execute(array(7));
        //Otra forma
            //$preparada = $mbd ->prepare("select nombre from usuarios where rol = :rol");
            //$preparada ->execute(array(':rol => 7'));
    foreach ($preparada as $key) {
        print "<br>Nombre: ".$key['nombre'];
    } 

    //INSERT preparada, parametros por orden
        //Una forma
    $preparada1 = $mbd ->prepare("INSERT INTO usuarios values(:codigo, :nombre,'','')");
    $preparada1 -> bindParam(':codigo', $key);
    $preparada1 -> bindParam(':nombre', $name);
        
    $key = 10;
    $name = 'nico';

    //otra forma
    $preparada1->execute();


    /*
        //INSERT
    $ins = "insert into usuarios(codigo, nombre, clave, rol) values ('', '', '','');";
    $result = $mbd->query($ins);
    if ($result) {
        echo "Fila insertada" . "<br>";
        echo "Filas insertadas " . $result->rowCount() . "<br>";
    } else print_r($mbd->errorinfo());

    echo "Codigo de la fila insertada: " . $mbd->lastInsertId() . "<br>";

    $last = $mbd->lastInsertId();
    echo "Last: " . $last . "<br>";
    //UPDATE
    $upd = "update usuarios set rol = 0 where codigo = $last";
    $result = $mbd->query($upd);
    if ($result) {
        echo "Fila actualizada" . "<br>";
        echo "Filas actualizadas " . $result->rowCount() . "<br>";
    } else print_r($mbd->errorinfo());

    $del = "delete from usuarios where rol='0'";
    $result = $mbd->query($del);

    if ($del) {
        echo "Fila borrada" . "<br>";
        echo "Filas borradas " . $result->rowCount() . "<br>";
    } else print_r($mbd->errorinfo());
    */


    

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br>";
    die();
}



