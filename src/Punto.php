<?php
class Punto {
    //Atributos
    private $y;
    private $x;

    //Constructor
    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    //Métodos
    public function getX():float{
        return $this->x;
    }

    public function getY():float{
        return $this->y;
    }

    public function distancia(Punto $punto):float{
        return sqrt((($punto->x - $this->x) * ($punto->x - $this->x)) + (($punto->y - $this->y) * ($punto->y - $this->y)));
    }
}
?>