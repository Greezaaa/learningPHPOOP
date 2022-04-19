<?php
//indiamos que php este istricto con tipo de datos
declare(strict_types = 1);
include "inc/autoloader.inc.php";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 OOPPHP - Type declaretions</title>
</head>

<body>
    <?php

  $person = new personas\Persona("Jeka", 23, "grande");

  try {
      $person->miNombre(2);
      echo $person->getName();
  } catch (TypeError $e) {
      echo "Error!: " .$e->getMessage();
  }


 ?>
</body>

</html>