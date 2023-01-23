<?php
include_once("../autoload.php");
use Herramientas\Tarta;

$rellenos = ['Chocolate', 'Vainilla', 'Leche', 'Fresa'];
$tarta = new Tarta('Selva negra',1,12,$rellenos,4,4);

$tarta->muestraResumen();
?>