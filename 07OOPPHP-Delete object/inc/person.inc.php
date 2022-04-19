<?php
class NewClass
{
    public $data = "Propiedad de la clase";
    
    public function __construct()
    {
        echo "Inicio de la clase <br>";
    }
    public function setNewProperty($newdata)
    {
        $this->data = $newdata;
    }
    public function getProperty()
    {
        return $this->data;
    }
    public function __destruct()
    {
        echo "<br> Finale de la clase";
    }
}