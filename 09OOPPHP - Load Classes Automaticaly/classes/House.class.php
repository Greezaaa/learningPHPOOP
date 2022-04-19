<?php

 class House
 {
     public $street;
     public $city;
     public $flor;

     public function __construct($street, $city, $flor)
     {
         $this->street = $street;
         $this->city = $city;
         $this->flor = $flor;
     }

     public function MyHome($street)
     {
         $this->street = $street;
     }
     public function getStreet()
     {
         return $this->street;
     }
 }