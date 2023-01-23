<?php
namespace Herramientas;


include_once("../autoload.php");
class Bollo extends Dulce implements Resumible

{

    public function __construct(string $nombre, int $numero, int $precio, private string $relleno)
    {
        parent::__construct($nombre, $numero, $precio);
    }
    public function getRelleno()
    {
        return $this->relleno;
    }
    public function muestraResumen()
    {
        echo "Nombre: " . $this->nombre . "<br>Número: " . $this->numero . "<br>Precio: " . $this->getPrecio() . "€ " .
            "<br>Precio con IVA: " . $this->getPrecioConIva() . "<br>" . "Relleno: " . $this->relleno . "<br>";
    }
}


?>