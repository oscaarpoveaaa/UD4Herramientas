<!-- 3. Crea la clase Tarta la cual hereda de Dulce. Añade los atributos: relleno, número de 
pisos, habrá tantos rellenos en el array como pisos tenga la tarta; y los atributos 
minNumComensales (por defecto 2) y maxNumComensales.  
A continuación, añade el método muestraComensalesPosibles, el cual debe mostrar 
Para dos comensales, Para X comensales o De X a Y comensales dependiendo de los 
valores de los atributos creados (min y maxNumComensales). Finalmente, sobrescribe 
tanto el constructor como el método muestraResumen. En index4.php genere el 
código para probar la clase.  -->

<?php
include_once('Dulces.php');
class Tarta extends Dulce
{
    public function __construct(string $nombre, int $numero, int $precio, private $rellenos = array(), private int $numPisos,  private int $maxNumComensales, private int $minNumComensales = 2)
    {
        parent::__construct($nombre, $numero, $precio);
    }

    public function getMaxNumComensales()
    {
        return $this->maxNumComensales;
    }
    
    public function muestraComensalesPosibles(){
        return "De " . $this->getMinNumComensales() . " a " . $this->getMaxNumComensales();
    }
    public function muestraResumen()
    {
        echo "Nombre: " . $this->nombre . "<br>Número: " . $this->numero . "<br>Precio: " . $this->getPrecio() . "€ " .
            "<br>Precio con IVA: " . $this->getPrecioConIva(). "<br>Numero de pisos: " . $this->numPisos . "<br>" . $this->comprobarRellenos() . "<br>" . $this->muestraComensalesPosibles() . "<br>";
    }

    

    /**
     * Get the value of minNumComensales
     */ 
    public function getMinNumComensales()
    {
        return $this->minNumComensales;
    }

    public function comprobarRellenos(){
        if($this->numPisos != count($this->rellenos)){
            return "El relleno tiene que ser igual al número de pisos";
        }else{
            $rellenos = "Rellenos: ";
            for ($i=0; $i < count($this->rellenos); $i++) {
                $rellenos = $rellenos . $this->rellenos[$i] . ", ";
            }
            return $rellenos;
        }
    }
}


?>