<?php
include_once("autoload.php");

use Herramientas\Chocolate;

$chocolate = new Chocolate('Nestle', 2, 2,70,50);

$chocolate->muestraResumen();
?>