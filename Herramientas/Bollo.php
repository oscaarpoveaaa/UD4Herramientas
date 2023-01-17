<!-- 2. Crea la clase Bollo la cual hereda de Dulce. Añade el atributo relleno. A 
continuación, sobrescribe tanto el constructor como el método muestraResumen. 
En index2.php genere el código para probar la clase.  -->

<?php
include_once('Dulces.php');
class Bollo extends Dulce
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