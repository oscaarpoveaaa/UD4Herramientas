<?php
include_once("../autoload.php");


use Herramientas\Tarta;
use Herramientas\Bollo;
use Herramientas\Cliente;
use Herramientas\Pasteleria;

$pasteleria = new Pasteleria("Todo Pastel", 4);

$pasteleria->comprarClienteProducto(5, 4);

$dulce1 = new Tarta('Selva Negra',1,3,['chocolate','nata','fresa'],3,3,2);
$dulce2 = new Bollo('bollicao', 2, 1,'nata');

$cliente1 = new Cliente('Juan', 1, 3, 3);
$cliente2 = new Cliente('Pepe', 2, 1, 2);

$cliente1->comprar($dulce1);
$cliente1->comprar($dulce2);

$cliente2->comprar($dulce2);
$cliente2->comprar($dulce1);

$cliente2->valorar($dulce2, "Pedazo de dulce");

$cliente1->listaPedidos();
$cliente2->listaPedidos();

