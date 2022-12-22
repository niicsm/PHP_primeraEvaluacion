<?php
/* si va bien redirige a principal.php si va mal, mensaje de error */


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userReal = $_POST['user'];
    $userNow = $_POST["user1"];
    $passwordReal = $_POST['passw'];
    $passwordNow = $_POST["password"];
    $data = array($userReal => $passwordReal === $passwordReal);
    if ($userNow === $userReal and $passwordNow === $passwordReal) {

        header("Location: principal.php");
    } else {
        
        $err = true;
    }

    
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulario de login</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php if (isset($err)) {
        echo "<p> Revise usuario y contraseña</p>";
    } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="user">Usuario</label>
        <input value="<?php echo array_key_exists('user1', $_POST) ? $_POST['user1'] : ''; ?>" id="user" name="user1" type="text">

        <label for="clave">Clave</label>
        <input id="password" name="password" type="password">

        <input type="submit">
        <a href="registro.html"><h1>Registrate</h1></a>
    </form>
</body>

</html>