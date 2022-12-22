<?php
   
    

    //echo "Voy a crear una coockie";
    $nombre = 'ContadorTDSW';
    $veces = 0;
    //$valor = 404;
    //$fecha_expiracion = time() + 600;
    $fecha_expiracion = mktime(0,0,1,1,2023);
    //$path = dirname($_SERVER['REQUEST_URI']);
    $path = $_SERVER['REQUEST_URI'];
    
    $veces = contadorCoockie($nombre, $veces);
    setcookie($nombre, $veces, $fecha_expiracion, $path, '', 0);
    
    hayCoockie();

   

    //Eliminar Cockies
        //setcookie('TDSW');
        //setcookie('TDSW','', time()-1);

        function hayCoockie(){
            if(empty($_COOKIE)){
                echo "No hay coockies disponibles";
            }else{
                foreach($_COOKIE as $element => $valor){
                    echo $element." ".$valor;
                }
            }
        }
        function contadorCoockie($nombre, $veces){
            if(!isset($_COOKIE[$nombre])){
                $veces = 1;
            }else{
                $veces = $_COOKIE[$nombre] + 1;
            }
            return $veces;
        }
?>