<?php
namespace Herramientas;
use util\DulceNoCompradoException;
include_once("../autoload.php");

class Cliente
{

    private $dulcesComprados = array();
    function __construct(public string $nombre, private int $numero, private int $numDulcesComprados, private int $numPedidosEfectuados = 0)
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
        if (($this->listaDeDulces($d) == false)) {
            $this->numPedidosEfectuados++;
            array_push($this->dulcesComprados, $d);
            echo "Compra de " . $d->nombre . " a nombre de " . $this->nombre . " correcto";
            return true;
        } else {
            throw new DulceNoCompradoException();
        }
    }
    public function listaDeDulces(Dulce $d): bool
    {
        if (in_array($d, $this->dulcesComprados)) {
            return true;
        } else {
            return false;
        }
    }

    public function valorar(Dulce $d, String $valoracion)
    {
        echo '<br>';
        if (($this->listaDeDulces($d) == true)) {
            echo $this->nombre . ' ha comentado sobre ' . $d->nombre . ' : ' . $valoracion . '<br>';
        } else {
            echo 'Este dulce no lo ha comprado este Usuario';
        }
    }

    public function listaPedidos()
    {echo '<br> ---------------------------------------------------------------------------- <br>';
        echo 'Lista de pedidos de ' . $this->nombre . ' :';
        for ($i = 0; $i < count($this->dulcesComprados); $i++) {
            echo '<br>' . $this->dulcesComprados[$i]->nombre;
        }
        echo '<br> ----------------------------------------------------------------------------';
    }
}
