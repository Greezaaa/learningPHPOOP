<?php

 //SCOPE Resolution Operators (::)
 
 //Primera clase

 class FirstClass
 {
     const EXAMPLE  = "No se puede cambiar CONSTANTE!!!";

     //Metodos
     public static function test()
     {
         $testing = "Esto es un test";
         return $testing;
     }
 }

//  $a = FirstClass::EXAMPLE;
// echo $a;

//segunda clase
class SecondClass extends FirstClass
{
    public static $staticProperty = "Propiedad static";

    //metodos

    public static function anotherTest()
    {
        //para acceder al contenido de la clase padre
        echo parent::EXAMPLE;

        //para acceder al contenido de propia clase
        echo self::$staticProperty;
    }
}

$b = SecondClass::anotherTest();
echo $b;