<?php

$arg = array('uri' => 'http://seminario.com', 'location' => 'http://localhost/soap/soapServer.php');

$client = new SoapClient(null, $arg);

var_dump($client->add(2,11));

?>