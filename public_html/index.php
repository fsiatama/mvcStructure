<?php

/*
 * El frontend controller se encarga de
 * configurar nuestra aplicacion
 */
require 'lib/config.php';
//Library
require '../vendor/autoload.php';


//Llamar al controlador indicado

if (empty($_GET['url']))
{
    $url = "";
}
else
{
    $url = $_GET['url'];
}

$request = new Request($url);
$request->execute();