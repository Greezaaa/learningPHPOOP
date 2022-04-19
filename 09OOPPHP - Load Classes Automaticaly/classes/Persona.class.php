<?php

 class Persona
 {
     public $name;
     public $edad;
     public $altura;

     public function __construct($name, $edad, $altura)
     {
         $this->name = $name;
         $this->edad = $edad;
         $this->altura = $altura;
     }

     public function miNombre($name)
     {
         $this->name = $name;
     }
     public function getName()
     {
         return $this->name;
     }
 }