<?php
class Triangulo extends Figura {

    private $base;
	private $altura;

	function __construct($base,$altura) {
        parent::__construct();
        $this->base = $base;
        $this->altura = $altura;
    } 

    public function getTipo(){
    	return "Triangulo";
    }

    public function getSuperficie(){
    	return ($this->base * $this->altura) / 2;
    }

    public function getBase(){
    	return $this->base;
    }

    public function getAltura(){
    	return $this->altura;
    }
}