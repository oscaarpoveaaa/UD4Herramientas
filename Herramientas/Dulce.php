<?php
namespace Herramientas;

include_once("Resumible.php");

abstract class Dulce implements Resumible
{
    public const IVA = 0.21;

    function __construct(public string $nombre, protected int $numero, private int $precio)
    {
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getPrecioConIva()
    {
        return $this->precio + ($this->precio * $this::IVA);
    }

    public function muestraResumen()
    {
        echo "Nombre: " . $this->nombre . "<br>Número: " . $this->numero . "<br>Precio: " . $this->precio . "€ " .
            "<br>Precio con IVA: " . $this->getPrecioConIva() . "<br>";
    }
}

?>