<?php
	$fich = fopen("fichero_ejemplo.txt", "w");
	if ($fich === False){
		echo "No se encuentra el fichero o no se pudo leer<br>";
	}else{
		fwrite($fich,'1');
		while( !feof($fich) ){
			$car = fgetc($fich, 1024);			
			echo $car."<br>";
		}
		fwrite($fich,'1');
	}	
	
	fclose($fich); 


