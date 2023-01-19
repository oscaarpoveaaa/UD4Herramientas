<?php
include_once('Cliente.php');
include_once('Dulces.php');
include_once('Tarta.php');
include_once('Bollo.php');


$dulce1 = new Tarta('Selva Negra',1,3,['chocolate','nata','fresa'],3,3,2);
$dulce2 = new Bollo('bollicao', 2, 1,'nata');
$dulce3 = new Dulce('croissant', 2, 4);

$cliente1 = new Cliente('Juan', 1, 3, 3);
$cliente2 = new Cliente('Pepe', 2, 1, 2);

$cliente1->comprar($dulce1);
$cliente1->comprar($dulce2);
$cliente1->comprar($dulce3);

$cliente2->comprar($dulce2);
$cliente2->comprar($dulce1);
$cliente2->comprar($dulce3);

$cliente2->valorar($dulce2, "Pedazo de dulce");

$cliente1->listaPedidos();
$cliente2->listaPedidos();

