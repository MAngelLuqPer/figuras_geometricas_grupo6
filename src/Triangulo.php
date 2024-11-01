<?php

// Importamos la clase Punto.
require_once 'Punto.php';

class Triangulo {
    private $base;
    private $altura;
    private $lado1;
    private $lado2;
    private $lado3;
    private $vertice;

    // Declaramos el constructor de la clase Triangulo.
    public function __construct(float $base, float $altura, float $lado1, float $lado2, float $lado3, Punto $vertice) {
        $this->base = $base;
        $this->altura = $altura;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
        $this->vertice = $vertice;
    }

    // Declaramos el método area() para calcular el area del triangulo.
    public function area(): float {
        return ($this->base * $this->altura) / 2;
    }

    // Declaramos el método perímetro() para calcular el perimetro del triangulo.
    public function perimetro(): float {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    // Declaramos el método getVertice() para obtener el vértice.
    public function getVertice(): Punto {
        return $this->vertice;
    }
}

?>
