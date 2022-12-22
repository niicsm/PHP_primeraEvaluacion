<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bool = false;
    $err = "";
    if (empty($_POST["buscar"])) {
        $err = "Completa el campo Buscar<br>";
        $bool = true;
    }
    if (empty($_POST["nombre"])) {
        $err = $err."Completa el campo Nombre <br>";
        $bool = true;
    }
    if (empty($_POST["apellido"])) {
        $err = $err."Completa el campo Apellido<br>";
        $bool = true;
    }
    if (empty($_POST["email"])) {
        $err = $err."Completa el campo Email<br>";
        $bool = true;
    }
    if (empty($_POST["edad"])) {
        $err = $err."Completa el campo Edad<br>";
        $bool = true;
    }
    if (empty($_POST["date"])) {
        $err = $err."Completa el campo Fecha de nacimiento<br>";
        $bool = true;
    }
    if (empty($_POST["mainPage"])) {
        $err = $err."Completa el campo Pagina personal<br>";
        $bool = true;
    }
    if (empty($_POST["time"])) {
        $err = $err."Completa el primer campo Horario<br>";
        $bool = true;
    }
    if (empty($_POST["time1"])) {
        $err = $err."Completa el segundo campo Horario<br>";
        $bool = true;
    }
    if ($bool === false) {
        header("Location: principal.php");
        
    }else{
        ?>
        <html>
            <head></head>
            <body>
                <a href="http://localhost/Clase/Errores.php?errores=<?php echo urlencode('err');?>" method="GET">Errores</a>
            </body>
        </html>
        <?php
    }
    
}
?>