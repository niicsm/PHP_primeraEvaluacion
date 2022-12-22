<?php
require_once 'bd.php';
$db = conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['usuario'];
    $passw = $_POST['clave'];
    $usu = $db->query("SELECT claveUsuario from usuarios where nombreUsuario='$user'");
    if ($usu == false) {
        $err = true;
    } else {
        $usu = $db->query("INSERT into usuarios values('','$user','$passw','1');");
        $usu = $db->query("INSERT into jugadores values('','$user','0','0');");
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: login.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <meta charset="UTF-8">
</head>
<body>
    <style>
        form {
            width: 25%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            margin-top: 50px;
            border: 2px solid black;
            border-radius: 5px;
            box-shadow: 2px 2px 5px black;
            height: 300px;
            width: 200px;
        }

        input {
            width: 150px;
            height: 30px;
            font-size: 15px;
            margin-top: 20px;
            border-radius: 5px;
            border: 2px solid black;
        }

        input:hover {
            transform: scale(1.1);
            transition-duration: 0.5s;
            background-color: #E5E5E5;

        }

        .result {
            margin: 0px;
            color: red;
            font-size: 12.5px;
        }

        input:valid,
        textarea:valid {
            background: #9EBD9A;
        }

        input:invalid,
        textarea:invalid {
            background: white;
        }
    </style>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h2>Registro</h2>
        <input value="<?php if (isset($usuario)) echo $usuario; ?>" id="usuario" name="usuario" type="text" placeholder="Nombre de usuario" minlength="3" maxlength="15" required>
        <input id="clave" name="clave" type="password" placeholder="Clave" minlength="3" required>
        <input id="clave" name="clave2" type="password" placeholder="Repita clave" minlength="3" required>
        <input type="submit">
    </form>
</body>
</html>