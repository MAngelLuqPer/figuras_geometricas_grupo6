<?php
    include_once("Punto.php");

    abstract class FiguraGeometrica {
        protected $nombre = "";

        function __construct($nombre) {
            $this->nombre = $nombre;
        }

        public function getNombre():string {
            return $this->nombre;
        }

        public abstract function area():float;
        public abstract function perimetro():float;
    }
?>