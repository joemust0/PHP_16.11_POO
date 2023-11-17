<?php

namespace App\model;

class Carro{

    private $modelo;

    function __construct($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this -> modelo;
    }
}