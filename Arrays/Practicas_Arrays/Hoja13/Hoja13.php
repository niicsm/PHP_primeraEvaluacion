<?php


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

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
        <!--<input type="hidden" name="MAX_FILE_SIZE" value="102400"> Para cada formulario--> 
        <input type="hidden" name="MAX_FILE_SIZE" value="1024000000000"> 
        <input type="file" id="fichero" name="imagen">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>