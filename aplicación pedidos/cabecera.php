<header>
 Usuario: <?php
 echo $_SESSION['usuario']['correo'];
 if($_SESSION['usuario']['rol'] === 0){
    echo "<a href='panelAdmin.php'>Panel de administración</a>
    <a href='categorias.php'>Home</a>
    <a href='carrito.php'>Ver carrito</a> 
    <a href='login.php'>Cerrar sesión</a>";
 }else{
    echo "
    <a href='categorias.php'>Home</a>
    <a href='carrito.php'>Ver carrito</a> 
    <a href='login.php'>Cerrar sesión</a>";
 }
 ?>
 
 
</header>
<hr>