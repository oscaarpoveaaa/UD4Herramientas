<!-- Crea la clase Chocolate la cual hereda de Dulce. Añade los atributos porcentaje de 
cacao y peso. A continuación, sobrescribe tanto el constructor como el método 
muestraResumen. En index3.php genere el código para probar la clase. -->

<?php
include_once('Dulces.php');
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