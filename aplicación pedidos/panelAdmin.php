<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();

	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Lista de categorías</title>
	</head>  
	<body>
		<?php require 'cabecera.php';?>
		<h1>Panel de administración</h1>
		<?php
		echo "<form action = 'anadir.php' method = 'POST'>";
		echo "<table>"; 
		echo "<tr><th>Añadir restaurante</th><th><input type='text' name='addUser' placeholder='ID User'></th><th><input type='submit' value='Añadir'></th>";
		echo "<tr><th>Eliminar restaurante</th><th><input type='text' name='dltUser' placeholder='ID User'></th><th><input type='submit' value='Eliminar'></th>";
		echo "<tr><th>-------------------------------</th><th>-------------------------------------</th><th>------------</th>";
		echo "<tr><th>Añadir categoria</th><th><input type='text' name='addCategoria' placeholder='Nombre Categoria'></th><th><input type='submit' value='Añadir'></th>";
		echo "<tr><th>Eliminar categoria</th><th><input type='text' name='dltCategoria' placeholder='Nombre Categoria'></th><th><input type='submit' value='Eliminar'></th>";
		echo "<tr><th>-------------------------------</th><th>-------------------------------------</th><th>------------</th>";
		echo "<tr><th>Añadir producto</th><th><input type='text' name='addProducto' placeholder='ID producto'></th><th><input type='submit' value='Añadir'></th>";
		echo "<tr><th>Eliminar producto</th><th><input type='text' name='dltProducto' placeholder='ID producto'></th><th><input type='submit' value='Eliminar'></th>";
		echo "<tr><th>-------------------------------</th><th>-------------------------------------</th><th>------------</th>";
		echo "<tr><th>Ver pedidos</th><th><th><input type='submit' value='Ver'></th>";
		echo "</table>"; 
		echo "</form";
		?>
		
		
		
	</body>
</html>