<?php
namespace tests;

include_once("../vendor/autoload.php");

use PHPUnit\Framework\TestCase;
use Herramientas\Tarta;

class TartaTest extends TestCase {
    public function testConstructor()
    {
        $tarta = new Tarta("Selva Negra",1,10,"Chocolate",1,3,2);
        $this->assertSame($tarta->getPrecio(),10);
    }
}

?>