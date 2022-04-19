<?php
namespace Personas;

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

    //se puede indicar tipo de datos y si el dato introducido es incorrecto nos mostraria el error
    /* funciona con
       class/interface names
       self (usado a la si mima clase)
       array
       callable
       bool
       float
       int
       string
       iterable
       object
    */
    public function miNombre(string $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}