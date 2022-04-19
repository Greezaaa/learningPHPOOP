<?php
include "inc/autoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09 OOPPHP - Autoload Classes</title>
</head>

<body>
    <?php
        
        $persona = new Persona("Jeka", 22, "1.70");
        echo $persona->name . " tiene " . $persona->edad ." años y mide mas de " .$persona->altura . "<br>";

        $dirName = new House("Zumaia 25", "Bilbao", "3A");
        echo "Vive en la calle " . $dirName->street . " puerta " . $dirName->flor ." que esta en " . $dirName->city . "<br>";
      
    
     ?>
</body>

</html>