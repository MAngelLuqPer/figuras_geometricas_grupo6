# Circulo

La clase `Circulo` representa una figura geométrica en forma de círculo. Extiende la clase abstracta `FiguraGeometrica` e implementa los métodos necesarios para calcular el área y el perímetro del círculo, además de otros métodos para obtener sus atributos.

## Atributos

- `nombre`: Nombre de la figura, heredado de `FiguraGeometrica`.
- `centro` (Punto): Representa el centro del círculo, utilizando un objeto de la clase `Punto`.
- `radio` (float): Longitud del radio del círculo.

## Métodos

- `__construct($nombre, Punto $centro, float $radio)`: Constructor que inicializa el nombre, el centro y el radio del círculo.
- `area()`: Calcula y devuelve el área del círculo usando la fórmula `π * radio^2`.
- `perimetro()`: Calcula y devuelve el perímetro del círculo usando la fórmula `2 * π * radio`.
- `getCentro()`: Devuelve el objeto `Punto` que representa el centro del círculo.
- `getRadio()`: Devuelve el radio del círculo.

## Ejemplo de Uso

```php
include_once "Punto.php";
include_once "Circulo.php";

$centro = new Punto(0, 0);
$circulo = new Circulo("Mi Círculo", $centro, 5);

echo "Área del círculo: " . $circulo->area() . "<br>";
echo "Perímetro del círculo: " . $circulo->perimetro() . "<br>";
echo "Centro del círculo: (" . $circulo->getCentro()->getX() . ", " . $circulo->getCentro()->getY() . ")<br>";
echo "Radio del círculo: " . $circulo->getRadio() . "<br>";
