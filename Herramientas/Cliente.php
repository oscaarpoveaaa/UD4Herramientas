<!-- 3. Crear la clase Cliente. El constructor recibirá el nombre, número y 
numPedidosEfectuados, este último pudiendo ser opcional y tomando como valor por 
defecto 0. Tras ello, añade getter/setters necesarios, no olvide el getter a 
numPedidosEfectuados (este campo va a almacenar un contador del total de pedidos 
que ha realizado). El array de dulcesComprados contendrá clases que hereden de 
Dulce. Finalmente, añade el método muestraResumen que muestre el nombre y la 
cantidad de pedidos (el cuál supondremos que solo podrá pedir 1 dulce por pedido).  -->



<?php
class Cliente
{
    function __construct(public string $nombre, private int $numero, private $dulcesComprados = array(), private int $numDulcesComprados, private int $numPedidosEfectuados = 0)
    {
    }
    public function getNumPedidosEfectuados()
    {
        return $this->numPedidosEfectuados;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getDulcesComprados()
    {
        return $this->dulcesComprados;
    }

    public function getNumDulcesComprados()
    {
        return $this->numDulcesComprados;
    }

    public function comprar(Dulce $d): bool 
    {
        echo "<br>";
        if (($this->tieneAlquilado($d) == false) && $this->numSoportesAlquilados < $this->maxAlquilerConcurrente) {
            $this->numSoportesAlquilados++;
            array_push($this->soportesAlquilados, $d);
            echo "Compra de " . $d->nombre . " correcto <br>";
            return true;
        } else {
            echo "El título: " . $d->nombre . " ya ha sido alquilado <br>";
            return false;
        }
    }
    public function listaDeDulces(Dulce $d): bool
    {
        if (in_array($d, $this->soportesAlquilados)) {
            return true;
        } else {
            return false;
        }
    }

    public function listaAlquileres()
    {
        for ($i = 0; $i < count($this->soportesAlquilados); $i++) {
            if ($i != count($this->soportesAlquilados) - 1) {
                echo "<br>" . $this->soportesAlquilados[$i]->titulo .  " esta alquilado <br>";
            }
        }
    }
}
