

<?php
class Pasteleria
{
    function __construct(private string $nombre, private $productos = array(), private int $numProductos, private $clientes = array(), private int $numClientes,)
    {
    }
}
