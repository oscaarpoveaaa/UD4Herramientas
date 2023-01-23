<?php
namespace Herramientas;

include_once("../autoload.php");
use util\ClienteNoEncontradoException;
use util\DulceNoEncontradoException;

class Pasteleria
{
    private $productos = array();
    private $clientes = array();
    private int $numProductos;
    function __construct(private string $nombre, private int $numClientes)
    {
    }

    private function incluirProducto(Dulce $producto){
        array_push($this->productos, $producto);
    }
    
    public function incluirTarta($nombre,$precio,$numPisos,$rellenos,$minC,$maxC){
        $tarta = new Tarta($nombre, $this->getNumProductos(), $precio, $rellenos, $numPisos, $maxC, $minC);
        $this->incluirProducto($tarta);
    }
    public function incluirBollo($nombre,$precio,$relleno){
        $bollo = new Bollo($nombre,$this->getNumProductos(),$precio,$relleno);
        $this->incluirProducto($bollo);
    }
    public function incluirChocolate($nombre,$precio,$portentajeCacao,$peso){
        $chocolate = new Chocolate($nombre,$this->getNumProductos(),$precio,$portentajeCacao,$peso);
        $this->incluirProducto($chocolate);
    }
    public function incluirCliente($nombre, $numero, $numDulcesComprados, $numPedidosEfectuados){
        $cliente = new Cliente($nombre,$numero, $numDulcesComprados, $numPedidosEfectuados);
        array_push($this->clientes, $cliente);

    }
    public function listarProductos(){
        {echo '<br> ---------------------------------------------------------------------------- <br>';
            echo 'Lista de productos :';
            for ($i = 0; $i < count($this->productos); $i++) {
                echo '<br>' . $this->productos[$i]->nombre;
            }
            echo '<br> ----------------------------------------------------------------------------';
        }
    }
    public function listarClientes()
    { {
            echo '<br> ---------------------------------------------------------------------------- <br>';
            echo 'Lista de clientes :';
            for ($i = 0; $i < count($this->clientes); $i++) {
                echo '<br>' . $this->clientes[$i]->nombre;
            }
            echo '<br> ----------------------------------------------------------------------------';
        }
    }
    public function comprarClienteProducto($numeroCliente,$numeroDulce){
        $saveCliente = "";
        $dulce = "";
        try {
            foreach ($this->clientes as $key) {
                if ($key->getNumero() == $numeroCliente) {
                    $saveCliente = $key;
                        foreach ($this->productos as $prod) {
                    
                            if ($prod->getNumero() == $numeroDulce) {
                                $dulce = $prod;
                                $saveCliente->comprar($dulce);
                                return $this;
                            }
                        }
                        if($dulce == null){
                            throw new DulceNoEncontradoException();
                        }
                }
            }
            if ($saveCliente == "") {
                throw new ClienteNoEncontradoException();
            }
        } catch (ClienteNoEncontradoException $e) {
            echo $e->getMessage();
        } catch (DulceNoEncontradoException $e) { 
            echo $e->getMessage();
        }
        return $this;
    }
    
    public function getNumProductos()
    {
        return count($this->productos);
    }
}   
