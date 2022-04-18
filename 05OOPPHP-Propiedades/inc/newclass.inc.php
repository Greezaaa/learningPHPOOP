<?php
//creando nueva clase con nombre "NewClass"
class NewClass
{

    //propiedades y metodos van aqui
    public $info = "Esto es una propiedad publica";
}
 //convertimos todo contenido de la clase en variable $objets
 $object = new NewClass;





 class PersonalName
 {
     //las propiedades privades se puede acceder solo de la misma clase en la que estan
     private $first = "Daniel";
     protected $last = "Fernandez";
     private $age = "29";

     public function nombre()
     {
         $a =$this->first;
         return $a;
     }
 }


 
 $person = new PersonalName();
//deberia mostrar el nombre "Daniel;
 echo $person -> nombre();
 echo "<br>";
 
 //herreddar propiedades de una clase
class Last extends PersonalName
{
    public function apellido()
    {
        $b =$this->last;
        return $b;
    }
}

$person = new Last();
//deberia mostrar el apellido "Fernandez";
echo $person -> apellido();
echo "<br>";