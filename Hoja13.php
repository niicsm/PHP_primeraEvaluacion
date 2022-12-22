<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ubi = $_POST['ubi'];
    $descrp = $_POST['textarea'];
    $postMax = ini_get('post_max_size');
    $errores = array(
        0 => 'Se subió correctamente',
        1 => 'El tamaño del archivo excede el admitido por el servidor',
        2 => 'El tamaño del archivo excede el admitido por el cliente',
        3 => 'El archivo no se pudo subir completamente',
        4 => 'No existe un directorio temporal donde subir el archivo',
        5 => 'No se ha incluído una descripción del archivo',
    );
    print_r($_FILES["imagen"]);

    foreach ($_FILES["imagen"]["tmp_name"] as $key => $temp_name) {
        if ($_FILES["imagen"]["name"][$key]) {
            $archivonombre = $_FILES["imagen"]["name"][$key];
            $fuente = $_FILES["imagen"]["tmp_name"][$key];
        }

        $carpeta = 'img/';
        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0777) or die("Hubo un problema al crear el directorio");
        }
        $dir = opendir($carpeta);
        $target_path = $carpeta . '/' . $archivonombre;

        if (move_uploaded_file($fuente, $target_path)) {
            echo "Los archivos $archivonombre se han cargado de forma correcta";
        } else {
            closedir($dir);
        }
    }



    foreach ($errores as $key => $value) {

        if ($_FILES['imagen']['error'] == $key) {


            if (empty($descrp)) {
                echo $errores[5] . "<br>";
            } else if ($_FILES['imagen']['error'] == 0) {
                if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                    $nombreDirectorio = "$ubi./";
                    $nombreFichero = $_FILES['imagen']['name'];
                    $nombreCompleto = $nombreDirectorio . $nombreFichero;
                    echo $value . "<br>";
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreCompleto);
                }
            } else {
                echo $value . "<br>";
            }
        }
    }

    /*echo "Nombre: " . $_FILES['imagen']['name'] . "<br>";
    echo "Tipo: " . $_FILES['imagen']['type'] . "<br>";
    echo "Tamaño: " . $_FILES['imagen']['size'] . "<br>";
    echo "Nombre temporal: " . $_FILES['imagen']['tmp_name'] . "<br>";
    echo "Error: " . $_FILES['imagen']['error'] . "<br>";*/
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ErroresSubidaFicheros</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <span>Indique el nombre del directorio donde se ubicar el archivo</span><input type="text" name="ubi" value="<?php echo array_key_exists('ubi', $_POST) ? $_POST['ubi'] : ''; ?>">
        <br><textarea name="textarea" rows="10" cols="50" placeholder="Breve descripcion del archivo"><?php echo  $_POST['textarea']; ?></textarea>
        <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
        <input type="file" name="imagen[]" multiple="">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>