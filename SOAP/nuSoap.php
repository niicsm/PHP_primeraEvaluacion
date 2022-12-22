<?php
include('lib/nusoap.php');
$server = new soap_server();
$server->configureWSDL('Servidor', 'urn:Servidor');

?>