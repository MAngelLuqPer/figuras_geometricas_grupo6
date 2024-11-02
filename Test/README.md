# TestCirculo

Este archivo `TestCirculo.php` contiene pruebas unitarias simples para verificar el funcionamiento de la clase `Circulo`. Se realizan pruebas sin el uso de frameworks como PHPUnit, utilizando en su lugar una función personalizada para comparar los resultados esperados con los obtenidos.

## Objetivo

Asegurarse de que la clase `Circulo`:
- Calcule correctamente el área y el perímetro.
- Devuelva el nombre, centro y radio correctamente.
  
## Pruebas Incluidas

### 1. Prueba del Área
- **Descripción**: Comprueba que el método `area()` de `Circulo` calcule el área correctamente.
- **Fórmula usada**: `π * radio^2`.
- **Resultado esperado**: El área correcta basada en el radio proporcionado.

### 2. Prueba del Perímetro
- **Descripción**: Verifica que el método `perimetro()` calcule el perímetro de manera adecuada.
- **Fórmula usada**: `2 * π * radio`.
- **Resultado esperado**: El perímetro correcto basado en el radio.

### 3. Prueba del Nombre
- **Descripción**: Asegura que el nombre del círculo se haya establecido correctamente en el constructor.
- **Resultado esperado**: El nombre asignado al crear el círculo.

### 4. Prueba del Centro
- **Descripción**: Confirma que el método `getCentro()` devuelve el objeto `Punto` que representa el centro del círculo.
- **Resultado esperado**: El mismo objeto `Punto` que fue pasado como centro en el constructor.

### 5. Prueba del Radio
- **Descripción**: Comprueba que el método `getRadio()` devuelva el radio asignado al círculo.
- **Resultado esperado**: El valor del radio proporcionado al crear el círculo.

## Estructura de Pruebas

Cada prueba utiliza la función `verificarIgualdad` que compara los valores esperados con los obtenidos y muestra el resultado de la prueba.

```php
function verificarIgualdad($esperado, $real, $nombrePrueba) {
    if ($esperado === $real) {
        echo "[✔] $nombrePrueba: Prueba pasada.<br>";
    } else {
        echo "[✘] $nombrePrueba: Falló. Se esperaba '$esperado', pero se obtuvo '$real'<br>";
    }
}
