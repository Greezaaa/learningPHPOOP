<?php

 class Persona
 {
     //propiedades de la clase Persona
     public $nombre;
     public $colorOjos;
     public $edad;

     //creamos constructor utilizando funcion reservada "__construct()"
     public function __construct($nombre, $colorOjos, $edad)
     {
         $this->nombre = $nombre;
         $this->colorOjos = $colorOjos;
         $this->edad = $edad;
     }

     //metodo
     public function setName($nombre)
     {
         $this->nombre = $nombre;
     }
     
     //referimos a una propiedad "privada" para mostrarla fuera de la clase
     public function getName()
     {
         return $this->nombre;
     }
 }