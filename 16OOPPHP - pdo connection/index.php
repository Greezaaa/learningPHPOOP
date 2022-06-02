<?php
    // we need
    // inc/autoloader.inc.php
    // classes/dbh.class.php
    // index.php
    
    include "inc/autoloader.inc.php";
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16OOPPHP - DB PDO CONNECTION</title>
</head>

<body>
    <main>
        <h3>Mostramos clase TEST en tabla con datos de la base de datos</h3>

        <table>
            <thead>
                <tr>
                    <td>#</td>
                    <td>name</td>
                    <td>email</td>
                    <td>birth</td>
                </tr>
            </thead>
            <tbody>

                <?php
//referimos al class
 $test = new Test();
 //dentro del la clase buscamos el metodo
 $test->getUsersTest1();

 ?>
            </tbody>
        </table>

        <h3>Ahora solo mostraremos 3 correos de los usuarios</h3>
        <?php
 
  $test2 = new Test;
  $test2->getUsersTest2();
 
  ?>

        <h3>Aqui mostraremos nombre de usuarios con nombre=Pedro y email=pedro@gmail.com</h3>
        <?php
        $test3 = new Test();
        $test3->getUsersTest3("Pedro", "pedro@gmail.com");
        ?>
        <h3>Aqui mostraremos datos de usuarios con nombre=Lucia o email=jeka@gmail.com</h3>
        <?php
        $test3 = new Test();
        $test3->getUsersTest4("Lucia", "jeka@gmail.com");
        ?>
        <h3>Insertamos data en base de datos</h3>
        <?php
        
        //  $test4 = new Test();
        //  $test4->setUsersTest1("Pedro", "pedro@gmail.com", "22-12-1984");
        
         ?>

        <h3>Update user with id 3</h3>
        <?php
         
        $test4 = new Test();
        $test4->updateUsersTest1("Alex", "Sasha@gmail.com", "25-09-1983", "3");
 
         
          ?>
    </main>
</body>

</html>