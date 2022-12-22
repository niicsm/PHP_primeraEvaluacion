<?php
$db = new mysqli("localhost", "root", "", "empresa");

if($db->connect_errno){
echo "Estas jodido";

}else{
    echo $db->host_info;
}



$stmt = $db->prepare("INSERT INTO usuarios (nombre, clave, rol) VALUES (?, ?, ?)");
$stmt->bind_param('ssi',  $nombre, $clave, $rol);
// Establecer parámetros y ejecutar
$nombre = "Donald Trump";
$clave = "Madrid";
$rol = '0';
$stmt->execute();
$nombre = "Hilary Clinton";
$clave = "Bacerlona";
$rol = '0';
$stmt->execute();

$stmt = $db->prepare("UPDATE usuarios SET nombre=? where clave=?");
$stmt->bind_param('si', $nombre, $clave);
$nombre = "rey";
$clave = "209";
$stmt->execute();

$stmt = $db->prepare("DELETE nombre FROM usuarios where clave=?");
$stmt->bind_param('si', $clave);
$clave = "203";
$stmt->execute();

// Mensaje de éxito en la inserción
echo "Se han creado las entradas exitosamente";
// Cerrar conexiones
$stmt->close();
$db->close();
?>