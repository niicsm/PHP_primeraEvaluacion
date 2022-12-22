<?php
#Teoria Servidor 

// C:\Users\Nico\Desktop\Examenes\Servidor\Tema_1



#Codigo PHP

#/ Comentarios
/*Comentarios de bloque*/
// o # De línea

#/Tipos de variable
// C:\Users\Nico\Desktop\Examenes\Servidor\Tema_2\Tipos de datos.png    Tipos de Variables
// C:\Users\Nico\Desktop\Examenes\Servidor\Tema_2\VariablesPredefinidas.png    Tipos de variables predefinidas

#/Impresion
print $a;
echo ($a);
print_r($array);


$b = 3.1;
$c = true;
var_dump($b, $c);
/*Salida*
float(3.1)
bool(true)
/



//Operadores
// C:\Users\Nico\Desktop\Examenes\Servidor\Tema_2\Operadores.png

#/Estructuras de control
//if, elseif, else    
$a = 0;
if ($a) {
    # code...
} elseif ($a) {
    # code...
} else {
    # code...
}
//CASE  
switch ($a) {
    case '1':
        # code...
        break;
    case '2':
        # code...
        break;
    case '3':
        # code...
        break;

    default: // Else
        # code...
        break;
}

#/Bucles

//For,foreach,while,do-while

for ($i = 0; $i < $a; $i++) {
    # code...
    for ($j = 0; $j < $a; $j++) {
        # code...
    }
}

foreach ($variable as $key => $value) {
    # code...
    foreach ($value as $key1 => $value1) {
        # code...
    }
}

while ($a) {
    # code...
}

do {
    # code...
} while ($a);



#/ GET y POST y resto de Variables predefinidas

$b = $_GET['tagName'];
$b = $_POST['tagName'];
$_COOKIE['galleta'];
$_REQUEST[''];

$GLOBALS['a'];
$_SERVER["REQUEST_METHOD"] == "POST";
$_SERVER['SERVER_NAME'];
$_FILES['b'];
$_SESSION['session'];
// $_ENV['a'];


#/ Arrays -> Escalares y asociativos 

$d = [1, 2, 3, 4];
print_r($d);

/*Salida
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)
*/

$e = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
print_r($e);

/*Salida
Array
(
    [one] => 1
    [two] => 2
    [three] => 3
    [four] => 4
)
*/


#/ Funciones arrays(ordenacion, copia...) 


#/ Funciones Date() 
$time = time();
$fecha = date("d-m-Y H:i:s a A D l Z", $time);
echo $time . "<br>";
echo $fecha . "<br>";
$fecha1 = getdate();
print_r($fecha1) . "<br>";

echo "<table>";
foreach ($fecha1 as $key => $value) {

    echo "<tr><td>$key</td><td>$value</td></tr>";
}
#/ Funciones 

function sumar($a, $b)
{
    return $a + $b;
}
#/ Clases y Objetos 

class Vegetable
{
    public $edible;
    public $color;
    private $a;
    protected $b;

    public function __construct($edible, $color = "green")
    {
        $this->edible = $edible;
        $this->color = $color;
    }

    public function isEdible()
    {
        return $this->edible;
    }

    public function getColor()
    {
        return $this->color;
    }

    function __toString()
    {
        return $this->edible;
    }
}

class Spinach extends Vegetable
{
    public $cooked = false;

    public function __construct($cooked)
    {
        parent::__construct(true, "green");
        $this->cooked = $cooked;
    }

    public function cook()
    {
        $this->cooked = true;
    }

    public function isCooked()
    {
        return $this->cooked;
    }
}

$objectSpinach = new Spinach($cooked);
echo $objectSpinach;
$objectSpinach->isCooked();


#/ Errores y excepciones
//Errores:  C:\Users\Nico\Desktop\Examenes\Servidor\Tema_2\ErroresExcepciones

//Excepciones
function restar($a, $b)
{
    if ($b == 0) {
        throw new Exception("El segundo argumento es 0");
    }

    return $a - $b;
}
try {
    //code...
} catch (Exception $e) { //La clase Throwable, se derivan tanto error como exception. catch(Throwable $e)
    echo "Excepcion: " . $e->getMessage() . "<br>";
} finally {
    //code..
}



#/ Bases de datos: PDO y MySql 


#/ Salida de arrays y consultas BBDD (Salida en tablas o listas)


#/ XML, JSON 


#/ Funciones predeterminadas Variables (isset, empty) 


#/ Funciones predeterminadas Strings 


#/ Sesiones y Coockies 


#/ Ajax, asincrona y sincrona 


#/ Aplicación pedidos 


#/ Servicios web: Soap y REST 


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido de examen</title>
</head>



<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <input type="number" id="quantity" name="peso" value="<?php if (isset($peso)) echo $peso; ?>" minlength="5" maxlength="40" required pattern="[A-Za-z0-9]+" required pattern="[A-Za-z0-9]{5,40}">

        <!-- Modelo de coche. Obligatorio, opciones posibles: A1, A3, A4 y A15
       Sólo se permiten letras y números -->
        <input type="text" name="coche" placeholder="Su modelo de coche" required pattern="A|a(1|3|4|15)" title="Modelos posibles: A1, A3, A4 y A15" />
    </form>
</body>

</html>