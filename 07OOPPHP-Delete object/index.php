<?php

 include 'inc/person.inc.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07 OOP PHP - Delete object</title>
</head>

<body>

    <?php
    $object = new NewClass;
    //utiizamos unset("nombre del objeto") para eliminar
    unset($object);
    echo $object->getProperty();
?>



</body>

</html>