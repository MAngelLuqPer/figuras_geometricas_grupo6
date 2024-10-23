<?php
include_once("FiguraGeometrica.php");
class cuadrado extends FiguraGeometrica{
    //Atributos
    private $esquina;
    private $lado;

    //Constructor
    function __construct($esquina, $lado){
        $this -> esquina = $esquina;
        $this -> lado = $lado;
    }

    //Métodos
    public function getLado(){
        return $this -> lado;
    }
    public function area(){
        return $this -> lado * $this -> lado;
    }
    public function perimetro(){
        return $this -> lado * 4;
    }
}