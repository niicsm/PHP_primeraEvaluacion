<?php
$db = new mysqli("localhost", "root", "", "empresa");
$hash =  password_hash('1', PASSWORD_BCRYPT);echo "<br>";
echo password_verify('1',$hash);

if ($db->connect_errno) {
    echo "Estas jodido";
} else {
    echo $db->host_info;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $result =  $db->query("SELECT * from usuarios where nombre='$name'");
    print_r($result);
    foreach ($result as $key => $a) {
        echo "<br>Nombre: " . $key['nombre'];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" placeholder="usuario" name="name">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>