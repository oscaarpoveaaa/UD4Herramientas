<?php
include_once("./autoload.php");

use Herramientas\Pasteleria;

$pasteleria = new Pasteleria("Todo Pastel", 4);



$pasteleria->incluirCliente("Juan", 1, 1, 1);
$pasteleria->incluirCliente("Pepe", 2, 1, 1);

$pasteleria->incluirBollo("Suso", 2, "chocolate");



$pasteleria->comprarClienteProducto(5, 4);


