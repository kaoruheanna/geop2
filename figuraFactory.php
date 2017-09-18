<?php
class FiguraFactory
{
	public static function Instance(){
        static $inst = null;
        if ($inst === null) {
            $inst = new FiguraFactory();
        }
        return $inst;
    }

    private function __construct(){

    }

    public function createFigura($tipo){
    	if ($tipo == "Cuadrado"){
            return $this->createCuadrado();
        }
        if ($tipo == "Triangulo"){
            return $this->createTriangulo();
        }
        if ($tipo == "Circulo"){
            return $this->createCirculo();
        }
        return NULL;
    }

    private function createCuadrado(){
        return new Cuadrado(4);
    }

    private function createTriangulo(){
        return new Triangulo(4,5);
    }

    private function createCirculo(){
        return new Circulo(3);
    }
}