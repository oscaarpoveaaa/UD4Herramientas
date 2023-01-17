<?php
include_once('Tarta.php');
$rellenos = ['Chocolate', 'Vainilla', 'Leche', 'Fresa'];
$tarta = new Tarta('Selva negra',1,12,$rellenos,4,8);

$tarta->muestraResumen();
?>