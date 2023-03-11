<?php

class Character{
    // PROPIERTIES
    // METHODS

    public $name;
    public $real_name;
    public $gender;
    public $universe_id;

    public function __construct($name, $real_name, $gender, $universe_id){
        $this->name = $name;
        $this->real_name = $real_name;
        $this->gender = $gender;
        $this->universe_id = $universe_id;
    }
}

class Persona{
    public $name;
    public $weight;
    public $height;

    public function __construct($nombre, $peso, $altura){
        $this->name = $nombre;
        $this->weight = $peso;
        $this->height = $altura;
    }

    public function get_bmi(){
        $bmi = $this->weight / $this->height ** 2;
        $bmi = round($bmi, 1);
        return $bmi;
    }
}