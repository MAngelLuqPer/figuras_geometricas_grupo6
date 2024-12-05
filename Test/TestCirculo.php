<?php
use PHPUnit\Framework\TestCase;

include_once "Punto.php";
include_once "Circulo.php";

class CirculoTest extends TestCase
{
    public function testArea()
    {
        $centro = new Punto(0, 0);
        $circulo = new Circulo("Círculo1", $centro, 5.0);
        $areaEsperada = pi() * pow(5.0, 2); // Área = π * radio^2
        $this->assertEquals($areaEsperada, $circulo->area(), "El área calculada no es correcta");
    }

    public function testPerimetro()
    {
        $centro = new Punto(0, 0);
        $circulo = new Circulo("Círculo1", $centro, 5.0);
        $perimetroEsperado = 2 * pi() * 5.0;
        $this->assertEquals($perimetroEsperado, $circulo->perimetro(), "El perímetro calculado no es correcto");
    }

    public function testGetCentro()
    {
        $centro = new Punto(2, 3);
        $circulo = new Circulo("Círculo2", $centro, 5.0);
        $this->assertSame($centro, $circulo->getCentro(), "El centro del círculo no coincide");
    }

    public function testGetRadio()
    {
        $centro = new Punto(0, 0);
        $circulo = new Circulo("Círculo3", $centro, 7.5);
        $this->assertEquals(7.5, $circulo->getRadio(), "El radio del círculo no coincide");
    }
}
?>
