<?php
namespace tests\Model;

include_once("./autoload.php");

use PHPUnit\Framework\TestCase;
use Herramientas\Bollo;

class BolloTest extends TestCase {
    public function testConstructor()
    {
        $napolitana = new Bollo("Napolitana", 1, 1, "Chocolate");
        $this->assertSame($napolitana->getNumero(), 1);
    }
}

?>