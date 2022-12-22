<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    //$radio1 = $_POST['radio'];
    $peso = $_POST['peso'];
    $url = $_POST['url'];
    $user = $_POST['user'];
    $passw1 = $_POST['passw'];
    $passw2 = $_POST['passw1'];
    $bool = false;

    //echo "Voy a crear una coockie";
    $nombre = 'nombreUser';
    $valor = $_POST['user'];
    $fecha_expiracion = mktime(0,0,1,1,2023);
    $path = $_SERVER['REQUEST_URI'];
    // Cambio para git
   
    

    if (!preg_match('#[A-Za-z]{3,20}$#', $nombre)) {
        echo '<br>NOT VALID NOMBRE';
        $bool = true;
    }
    if (!preg_match('#[A-Za-z" "]{3,20}$#', $apellidos)) {
        echo '<br>NOT VALID APELLIDOS';
        $bool = true;
    }
   /* if (!preg_match($radio, FILTER_VALIDATE_BOOLEAN)) {
        echo '<br>NOT VALID BOOL';
        $bool = true;
    }*/

    if (!preg_match('#[0-9]{1,2}$#', $edad)) {
        echo '<br>NOT VALID EDAD';
        $bool = true;
    }


    if (!preg_match('#[0-9]{1,2}$#', $peso)) {
        echo '<br>NOT VALID PESO';
        $bool = true;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<br>NOT VALID EMAIL';
        $bool = true;
    }

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
        echo '<br>NOT VALID URL';
        $bool = true;
    }

    if (!preg_match('#[A-Za-z]{3,20}$#', $user)) {
        echo '<br>NOT VALID USUARIO';
        $bool = true;
    }

    if (!($passw1===$passw2)) {
        echo '<br>NO COINCIDEN LAS CONTRASEÑAS';
        $bool = true;
    }
    echo $bool;

    if ($bool === false) {
        setcookie($nombre, $veces, $fecha_expiracion, $path, '', 0);
        header("Location: prueba1.php");
        
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
    <style>
        * {
            padding: 0px;
            margin: 5px;
        }

        span {
            font-size: 25px;
        }
    </style>
    <h1>Registro</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
        <br><span>Tu nombre: </span><input type="text" name="nombre" value="<?php echo array_key_exists('nombre', $_POST) ? $_POST['nombre'] : ''; ?>">
        <br> <span>Tus apellidos: </span><input type="text" name="apellidos" value="<?php echo array_key_exists('apellidos', $_POST) ? $_POST['apellidos'] : ''; ?>">
        <br> <span>Tu edad: </span><input type="text" name="edad" value="<?php echo array_key_exists('edad', $_POST) ? $_POST['edad'] : ''; ?>"> 
        <br> <span>Email: </span><input type="text" name="email" value="<?php echo array_key_exists('email', $_POST) ? $_POST['email'] : ''; ?>"> 
        <br> <span>Trabaja: </span><input type="radio" value="T" name="radio" >
        <span>No trabaja: </span><input type="radio" value="NT" name="radio" checked>
        <br> <span>Peso: </span><input type="text" name="peso" value="<?php echo array_key_exists('peso', $_POST) ? $_POST['peso'] : ''; ?>">
        <br> <span>URL: </span><input type="text" name="url" value="<?php echo array_key_exists('url', $_POST) ? $_POST['url'] : ''; ?>">
        <br><br> <span>Usuario: </span><input type="text" name="user" value="<?php echo array_key_exists('user', $_POST) ? $_POST['user'] : ''; ?>">
        <br> <span>Contraseña: </span><input type="password" name="passw">
        <br> <span>Repite contraseña: </span><input type="password" name="passw1" >
        <br><input type="submit" value="Enviar">
    </form>
</body>

</html>