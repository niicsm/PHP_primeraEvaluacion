<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $veces= 0;
    $coockie = '';
    
    $coockieName = 'nombre';
    $coockieValue = $nombre;
    $coockieDate =  mktime(0, 0, 1, 1, 2023);
    $path = $_SERVER['REQUEST_URI'];
    
    
    if (!isset($_COOKIE['nombre'])) {
        echo "Hola";
        $coockie = setcookie($coockieName, $coockieValue, $coockieDate, $path, '', 0);
        echo 'Hola, tu primera vez?';
        $_SESSION['sesion'] = $_COOKIE['nombre'];
        $veces++;
        header('Location: 1_1.php');
    } else {
        $_SESSION['sesion'] = $_COOKIE['nombre'];
        echo 'Hola, tu primera vez?';
        
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
    
        <span>Nombre: </span><input type="text" name="name">
        <input type="submit" value="Enviar">

        
    </form>
</body>

</html>