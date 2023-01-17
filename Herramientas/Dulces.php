<!-- 1. Crea una clase para almacenar soportes (Dulces.php). Esta clase será la clase padre 
de los diferentes dulces con los que trabaje nuestra pastelería (bollos, tartas y 
chocolates). 
Crea el constructor que inicialice sus propiedades. Fíjate que la clase no tiene métodos 
setters. 
Definir una constante mediante un propiedad privada y estática denominada `IVA con 
un valor del 21%. Crea un fichero llamado index1.php donde cree un objeto Dulce y 
muestre sus propiedades por pantalla.  -->

<?php
class Dulce
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