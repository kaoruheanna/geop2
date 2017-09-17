<?php
class Circulo extends Figura {

	private $radio;

	function __construct($radio) {
        parent::__construct();
        $this->radio = $radio;
    } 

    public function getTipo(){
    	return "Circulo";
    }

    public function getSuperficie(){
    	return M_PI * $this->radio * $this->radio;
    }

    public function getDiametro(){
        return $this->radio * 2;
    }
}