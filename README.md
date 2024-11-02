# figuras_geometricas_grupo6

## Branch: main

### Descripción
En este branch se ha implementado las clases "Punto" y "FiguraGeometrica", es decir, las clases base del proyecto

### Archivos

#### `Punto.php`
- **Constructor**:
  -Se solicita la cordenada "x" e "y" para así saber donde colocar el punto. Son de tipo Float.
- **Métodos**:
  - `getX()`: Devuelve el valor "x" del punto
  - `getY()`: Devuelve el valor "y" del punto
  - `distancia(Punto $p)`:Se le pasa un objeto tipo punto y calcula la distancia desde el origen (x:0, y:0)hasta dicho punto.

#### `FiguraGeometrica.php`
- **Constructor**:
  - Clase abstracta que se construye con un nombre junto a los atributos del Punto.
- **Métodos**
  - `area():float`: Este método calculará el área de la figura geométrica, pero su implementación depende de cada figura específica (como un círculo o un cuadrado).
  - `perimetro():float`: Este método calculará el perímetro (o circunferencia) de la figura geométrica. La implementación también variará según el tipo de figura.

**Hecho por:** Miguel Ángel Luque Pérez
