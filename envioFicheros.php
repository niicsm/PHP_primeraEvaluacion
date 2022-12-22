<?php

if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
    $nombreDirectorio="../img";
    $nombreFichero = $_FILES['imagen']['name'];
    $nombreCompleto = $nombreDirectorio.$nombreFichero;
    if(is_file($nombreCompleto)){
        $idUnico=time();
        $nombreFichero = $idUnico.' - '.$nombreFichero;
        $nombreCompleto = $nombreDirectorio.$nombreFichero;
       
    }
    move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreCompleto);
    
     
    echo "Fichero subido con el nombre: $nombreFichero.<br>";
}else{
    print("No se ha podido subir");
}


print_r($_FILES['imagen']['name']. "<br>"); 
print_r($_FILES['imagen']['type']. "<br>"); 
print_r($_FILES['imagen']['size']. "<br>"); 
print_r($_FILES['imagen']['tmp_name']. "<br>"); 
print_r($_FILES['imagen']['error']. "<br>"); 
?>