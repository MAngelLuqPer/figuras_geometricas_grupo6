<?php
include_once "FiguraGeometrica.php";
include_once "Punto.php";

class Circulo extends FiguraGeometrica
{
    protected $centro;
    protected $radio;

    public function __construct($nombre, Punto $centro, float $radio)
    {
        parent::__construct($nombre);
        $this->centro = $centro;
        $this->radio = $radio;
    }

    public function area(): float
    {
        return pi() * pow($this->radio, 2);
    }

    public function perimetro(): float
    {
        return 2 * pi() * $this->radio;
    }
    
    public function getCentro(): Punto
    {
        return $this->centro;
    }

    public function getRadio(): float
    {
        return $this->radio;
    }
}
?>
