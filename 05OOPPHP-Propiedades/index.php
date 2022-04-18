<?php

 include 'inc/person.inc.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 OOP PHP - Metodos y Propiedades de una clase</title>
</head>

<body>

    <?php
    
     $Jeka = new Person;
        $Jeka->setName("Jeka", "azul");
        echo $Jeka->name . " tiene ojos de color ";
        echo $Jeka->colorOjos . "<br>";
    
        $Fernando = new Person;
        $Fernando->setName("Fernando", "azul");
        echo $Fernando->name . " tiene ojos de color ";
        echo $Fernando->colorOjos;
     ?>



</body>

</html>