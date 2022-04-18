<?php

 class Person
 {
     //propiedades
     public $name;
     public $colorOjos;
     public $edad;

     //metodos
     public function setName($name, $colorOjos)
     {
         $this->name = $name;
         $this->colorOjos = $colorOjos;
     }
 }