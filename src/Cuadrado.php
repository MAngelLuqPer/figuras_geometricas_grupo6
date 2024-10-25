<?php
include_once("FiguraGeometrica.php");
class Cuadrado extends FiguraGeometrica{
    //Atributos
    private $esquina;
    private $lado;

    //Constructor
    public function __construct($nombre, $esquina, $lado){
        parent::__construct($nombre);
        $this -> esquina = $esquina;
        $this -> lado = $lado;
    }

    //Métodos
    public function getLado():float{
        return $this -> lado;
    }
    public function area():float{
        return $this -> lado * $this -> lado;
    }
    public function perimetro():float{
        return $this -> lado * 4;
    }
}