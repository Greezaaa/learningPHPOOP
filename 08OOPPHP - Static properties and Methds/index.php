<?php include "inc/config.inc.php";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

//  echo Person::$drinkingAge ."<br>";
//  Person::setDrinkingAge(18);
//  echo "<br>". Person::$drinkingAge;

$person = new Person("Jeka", "Azul", 25);
echo $person->getDA() ;
 ?>
</body>

</html>