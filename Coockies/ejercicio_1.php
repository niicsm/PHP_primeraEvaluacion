<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        
        $nombreCo = $nombre;
        $veces = 0;
        //$valor = 404;
        //$fecha_expiracion = time() + 600;
        $fecha_expiracion = mktime(0,0,1,1,2023);
        //$path = dirname($_SERVER['REQUEST_URI']);
        $path = $_SERVER['REQUEST_URI'];
    
        $veces = contadorCoockie($nombre, $veces);
        setcookie($nombre, $veces, $fecha_expiracion, $path, '', 0);
        echo $nombre;
    }


    function contadorCoockie($nombre, $veces){
        if(!isset($_COOKIE[$nombre])){
            $veces = 1;
        }else{
            $veces = $_COOKIE[$nombre] + 1;
        }
        return $veces;
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
        <span>Pon tu nombre</span><input type="text" name="nombre" placeholder="Nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>