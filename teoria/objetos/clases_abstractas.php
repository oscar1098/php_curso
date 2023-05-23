<?php

abstract Class ClaseAbstracta{
    abstract protected function getValor();
    abstract protected function valorPrefijo($prefijo);

    public function imprimir(){
        echo $this -> getValor();
    }
}

class ClaseConcreta extends ClaseAbstracta{
    protected function getValor(){
        return "Clase concreta";
    }

    protected function valorPrefijo($prefijo){
        return $prefijo . "Clase concreta";
    }
}

$clase1 = new ClaseConcreta;

$clase1 -> imprimir();


