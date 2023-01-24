<?php

include_once("autoload.php");

use Herramientas\Bollo;

$bollo = new Bollo('Brazo gitano', 2, 3, 'chocolate');

$bollo->muestraResumen();

?>