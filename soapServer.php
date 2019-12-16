<?php

require_once('lib/nusoap.php');

function  add($min,$max){
 return rand($min,$max);
}
$server = new soap_server();

$server->configureWSDL("SA soap","urn:http://seminario.com");


$server->register("add",
                // param
                array('min'=>'xsd:int','max'=>'xsd:int'), 
                // return
                array('return'=>'xsd:int'),
                // namespace
                "http://seminario.com",
                // soapaction
                false,
                // style
                'rpc',
                // use
                'encoded',
                // description
                'A simple add web method');

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service(file_get_contents("php://input"));

?>