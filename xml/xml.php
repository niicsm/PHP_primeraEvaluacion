<?php
if(file_exists('fichero_xml.xml')){
    $xml = simplexml_load_file('fichero_xml.xml');
    print_r(($xml));

	$nombres = $xml->xpath("//nombre");
	foreach($nombres as $valor){
		echo $valor;
		echo "<br>";
	}
}
?>