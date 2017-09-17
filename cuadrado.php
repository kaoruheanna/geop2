<?php
class Cuadrado extends Figura {

	private $lado;

	function __construct($lado) {
        parent::__construct();
        $this->lado = $lado;
    } 

    public function getTipo(){
    	return "Cuadrado";
    }

    public function getSuperficie(){
    	return $this->lado * $this->lado;
    }

    public function getBase(){
    	return $this->lado;
    }

    public function getAltura(){
    	return $this->lado;
    }
}