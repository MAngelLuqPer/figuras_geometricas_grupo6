<?php
include_once("Punto.php");
    public abstract class FiguraGeometrica extends Punto{
    //Atributos
    protected $nombre;

    //Constructor
    function __construct($nombre){
        $this->nombre = $nombre;
    }
    
    //Métodos
    public function getNombre():string{
        return $this->nombre;
    }
    public abstract function area():float;
    public abstract function perimetro():float;

}
?>