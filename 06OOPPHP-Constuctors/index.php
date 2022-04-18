<?php

 include 'inc/person.inc.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 OOP PHP - Constructores y Destructores</title>
</head>

<body>

    <?php
    //introducimos parametros
    //directamente en clase gracias a __construct()
$Jeka = new Persona("Jeka", "Azul", 38);

//mostramos el resultado
echo $Jeka->nombre . " tiene ojos de color " . $Jeka->colorOjos . ' y hace nada ha cumplido '. $Jeka->edad ." años <br>";

//tambien se puede volver a establecer nuevo valor con metodo
$Jeka->setName("Felipe");

echo $Jeka->nombre;
?>



</body>

</html>