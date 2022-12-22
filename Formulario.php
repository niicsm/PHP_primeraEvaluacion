<?php
include 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Variables: 
    $estaciones = array();
    //$estaciones = $_POST['estaciones'];
    $color=$_POST["color"];
    $buscar=$_POST["buscar"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $email=$_POST["email"];
    $fecha=$_POST["date"];
    $edad=$_POST["edad"];
    echo $fecha;
    C_color($color);
    C_buscar($buscar);
    C_nombre($nombre);
    C_apellido($apellido);
    C_email($email);
    C_fecha($fecha);
    C_edad($edad);
    echo strtotime("01-03-1900");

    $bool = false;
    
    
    /*function estaciones($estaciones){
        foreach ($estaciones as $estacion) {
            echo $estacion;
        }
    }*/
    //estaciones($estaciones);
    
    if (empty($_POST["buscar"])) {
        echo "Completa el campo Buscar<br>";
        $bool = true;
    }
    if (empty($_POST["nombre"])) {
        echo "Completa el campo Nombre<br>";
        $bool = true;
    }
    if (empty($_POST["apellido"])) {
        echo "Completa el campo Apellido<br>";
        $bool = true;
    }
    if (empty($_POST["email"])) {
        echo "Completa el campo Email<br>";
        $bool = true;
    }
    
    if (empty($_POST["date"])) {
        echo "Completa el campo Fecha de nacimiento<br>";
        $bool = true;
    }
    if (empty($_POST["mainPage"])) {
        echo "Completa el campo Pagina personal<br>";
        $bool = true;
    }
    if (empty($_POST["time"])) {
        echo "Completa el primer campo Horario<br>";
        $bool = true;
    }
    if (empty($_POST["time1"])) {
        echo "Completa el segundo campo Horario<br>";
        $bool = true;
    }
    if (empty($check)) {
        echo "Completa el sexo<br>";
        /*if($_POST["sexo"] !== empty($_POST["sexo"]){

        }
        $bool = true;*/
    }

    if ($bool === false) {

        $fecha = $_POST["fecha"];
        print_r($fecha);
        header("Location: oculto.php");
    }
}
?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Formulario.css">
</head>

<body>

    <!---->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="POST">
        <span>Estaciones </span>
        <select multiple size="4" name="estaciones[]" value="<?php  ?>">

            <option value="Primavera">Primavera</option>
            <option value="Verano">Verano</option>
            <option value="Otoño">Otoño</option>
            <option value="Invierno">Invierno</option>

            </option>
        </select><br>

        <span>Color Favorito </span>
        <input type="color" id="color" name="color">

        <span><br>Buscar </span>
        <input type="" id="buscar" name="buscar" required pattern ="A(a(1|3|4|15)" title="cdusahbf" value="<?php echo array_key_exists('buscar', $_POST) ? $_POST['buscar'] : ''; ?>">
        
        <span><br>Nombre </span>
        <input type="" id="nombre" name="nombre" value="<?php echo array_key_exists('nombre', $_POST) ? $nombre : ''; ?>">

        <span><br>Apellido </span>
        <input type="" id="apellido" name="apellido" value="<?php echo array_key_exists('apellido', $_POST) ? $_POST['apellido'] : ''; ?>">

        <span><br>Email </span>
        <input type="" id="email" name="email" value="<?php echo array_key_exists('email', $_POST) ? $_POST['email'] : ''; ?>">

        <span><br>Fecha de nacimiento </span>
        <input type="date" id="date" name="date" value="<?php echo array_key_exists('date', $_POST) ? $_POST['date'] : ''; ?>">

        <span><br>Edad (de 0 a 150) </span>
        <input type="" id="edad" name="edad" value="<?php echo array_key_exists('edad', $_POST) ? $_POST['edad'] : ''; ?>">

        <span><br>Pagina personal </span>
        <input type="" id="mainPage" name="mainPage" value="<?php echo array_key_exists('mainPage', $_POST) ? $_POST['mainPage'] : ''; ?>">

        <br><span>Sexo:</span>
        <input type="radio" id="sexo" name="sexo" value="M">Mujer
        <input type="radio" id="sexo" name="sexo" value="H>">Hombre

        <input type="hidden" name="campoOculto[]">

        <span><br>Horario: De </span>
        <input type="time" id="time" name="time" value="<?php echo array_key_exists('time', $_POST) ? $_POST['time'] : ''; ?>">
        <span> a </span>
        <input type="time" id="time1" name="time1" value="<?php echo array_key_exists('time1', $_POST) ? $_POST['time1'] : ''; ?>">


        <br><input type="checkbox" name="extras[]" value="garaje"><br>

        </span><input type="submit"><br>

    <form action="Hoja13.php" method="post" enctype="multipart/form-data">
    <span>Indique el nombre del directorio donde se ubicar el archivo</span><input type="text" placeholder=" " name="ubi">
    <br><textarea name="textarea" rows="10" cols="50" placeholder="Breve descripcion del archivo"></textarea>
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
    <input type="file" name="imagen">
    <input type="submit" value="Enviar">

    </form>
</body>

</html>