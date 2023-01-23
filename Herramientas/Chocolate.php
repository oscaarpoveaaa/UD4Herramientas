<?php
namespace Herramientas;

include_once("../autoload.php");
class Chocolate extends Dulce 
{

    public function __construct(string $nombre, int $numero, int $precio, private int $porcentajeCacao, private int $peso )
    {
        parent::__construct($nombre, $numero, $precio);
    }
    public function getPorcentajeCacao()
    {
        return $this->porcentajeCacao;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function muestraResumen()
    {
        echo "Nombre: " . $this->nombre . "<br>Número: " . $this->numero . "<br>Precio: " . $this->getPrecio() . "€ " .
            "<br>Precio con IVA: " . $this->getPrecioConIva() . "<br>" . "Porcentaje de Cacao: " . $this->porcentajeCacao . "%<br>" . "Peso: " . $this->peso . "<br>" ;
    }


}


?>