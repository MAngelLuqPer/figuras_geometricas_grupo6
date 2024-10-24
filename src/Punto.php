<?php
class Punto {
    private $y = 0.0;
    private $x = 0.0;

    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function getX():float{
        return $this->x;
    }

    public function getY():float{
        return $this->y;
    }

    public function distancia(Punto $p):float{
        return sqrt(($p->x * $p->x) + ($p->y * $p->y) );
    }
}
?>