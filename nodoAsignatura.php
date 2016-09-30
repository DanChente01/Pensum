<?php

//Definicion de clase tipo nodo

Class Nodo{
    private $info;
    private $siguiente;

    function __construct($i) {
        $this->info=$i;
    }

    function getInfo(){
        return $this->info;
    }

    function getSig(){
        return $this->siguiente;
    }

    function setInfo($i){
        $this->info=$i;
    }

    function setSig($i){
        $this->siguiente=$i;
    }
}
?>
