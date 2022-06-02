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
    <title>17OOPPHP - MVC Model</title>
</head>
<style>
table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: separate;
    width: 90%;
    max-width: 700px;
    margin: 3rem auto 0;
    border-radius: 3px;
    border: 1px solid rgba(0, 0, 0, 0);
}

table td,
table th {

    padding: 8px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.9);
    border-radius: 3px;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tbody tr:hover {
    background-color: rgba(0, 0, 0, 0.1);
}

table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
}
</style>

<body>
    <main>

        <table>

            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>birth</th>
            </tr>

            <tbody>
                <?php
                    //referimos al class
                    $users = new UsersView();
                    //dentro del la clase buscamos el metodo e indicamos el ID
                    $users->showUser('3');

                    ?>
            </tbody>
        </table>


    </main>
</body>

</html>