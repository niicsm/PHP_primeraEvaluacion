<?php
$mysqli = new mysqli("localhost", "root", "", "empresa");

if($mysqli->connect_errno){
echo "Estas jodido";

}else{
    echo $mysqli->host_info;
}

foreach ($variable as $key => $value) {
    # code...
}
$query = "select * from usuarios";

$resultado = $mysqli->query($query) or die($mysqli->error);

//$numeroUsuarios = $resultado->num_rows;
$filas = $resultado->fetch_all();

//echo "<p>Numero de usuarios: ".$numeroUsuarios;
echo "<table >";
echo "<tr><b><td>Código</td><td>Nombre</td><td>Clave</td><td>rol</td></b></tr>";
foreach($filas as $key=> $value){
    echo "<tr>";
    foreach($value as $key1)
        echo "<td>".$key1."</td>"; 
    
}
echo "</tr>";
echo "</table>";

foreach($filas as $key=> $value){
    echo "<ul>";
    foreach($value as $key1)
        echo "<li>".$key1."</li>"; 
        echo "</ul>";
}



$mysqli->close();
?>