<?php 
	session_start();
	$usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $_SESSION['usuario'] = $_POST['usuario'];
    echo "<b>Nombre de la sesion: </b>".session_name()."<br> <b>SesionID: </b>".session_id();
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Página principal</title>
		<!--<link rel = "stylesheet" href = "./css/alta_usuarios.css">-->
		<meta charset = "UTF-8">
	</head>
	<body>		
		<br><br><br><span>Usuario</span><input type="text" name="usuario">
        <br><br><span>Correo</span><input type="text" name="correo">
        <input type="submit" value="Enviar">
    </body>
</html>