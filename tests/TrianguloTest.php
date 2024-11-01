<?php

require_once 'Triangulo.php';
require_once 'Punto.php';

function assertEquals($resultadoEsperado, $resultadoRecibido, $mensaje) {
    if ($resultadoEsperado === $resultadoRecibido) {
        echo "<p>Correcto: $mensaje</p>";
    } else {
        echo "<p>Error: Se esperaba: $resultadoEsperado, y en su lugar se obtuvo: $resultadoRecibido</p>";
    }
}

// Creamos una función que englobe todas las pruebas.
function testTriangulo($triangulo) {
    // Test area()
    $area = $triangulo->area();
    assertEquals(25.0, $area, "Cálculo del área.");

    // Test perimetro()
    $perimetro = $triangulo->perimetro();
    assertEquals(18.0, $perimetro, "Cálculo del perímetro");

    // Test getVertice()
    assertEquals(0, $triangulo->getVertice()->getX(), "Coordenada X del vértice");
    assertEquals(0, $triangulo->getVertice()->getY(), "Coordenada Y del vértice");
}

/*

Llamamos a la función testTriangulo() para ejecutar las pruebas,
le pasamos como parámetro un objeto triángulo.

Lo he hecho de esta forma, ya que puede ser que queramos pasar varios triangulos a la vez por las pruebas.

*/
testTriangulo(new Triangulo(5.0, 10.0, 5.0, 6.0, 7.0, new Punto(0, 0)));

?>