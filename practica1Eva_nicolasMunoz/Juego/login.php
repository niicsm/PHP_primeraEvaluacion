<?php
require_once 'bd.php';
$db = conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clave = 0;
    $user = $_POST['usuario'];
    $passw = $_POST['clave'];
    $usu = $db->query("select claveUsuario from usuarios where nombreUsuario='$user'");
    if ($usu->num_rows > 0) {
        while ($row = $usu->fetch_assoc()) {
            $clave = $row["claveUsuario"];
        }
    }
    if ($passw === $clave) {
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        $date = date('m/d/Y g:i A', time() + 3600 * 24);
        setcookie("hora", date('m/d/Y g:i A'));
        $_SESSION['numPartidas'] = 0;
        header("Location: juegoMain.php");
    } else {
        $err = true;
        $usuario = $_POST['usuario'];
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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
            height: 275px;
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
    <?php if (isset($_GET["redirigido"])) {
        echo "<p>Haga login para continuar</p>";
    } ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h1>Login</h1>
        <?php if (isset($err) and $err == true) {
            echo "<p class='result'> Revise usuario y contraseña *</p>";
        } ?>
        <input value="<?php if (isset($usuario)) echo $usuario; ?>" id="usuario" name="usuario" type="text" placeholder="Usuario" minlength="3" maxlength="15" required pattern="[A-Za-z0-9]+">
        <input id="clave" name="clave" type="password" placeholder="Contraseña" minlength="3" required>
        <input type="submit">
    </form>
</body>

</html>