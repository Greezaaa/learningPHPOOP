<?php
declare(strict_types = 1);
 include 'inc/autoloader.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Calculator</title>
</head>

<body>
    <?php
    //si se han enviado los datos inluimos el archivo de calculo
    if (isset($_POST['submit'])) {
        include_once "inc/calc.inc.php";
    }  ?>
    <form action="index.php" method="post">
        <p>Calculator</p>
        <input type="number" name="num1" placeholder="Primer nuemero">
        <select name="oper" id="">
            <option value="add">Sumar</option>
            <option value="sub">Restar</option>
            <option value="div">Dividir</option>
            <option value="mul">Multiplicar</option>
        </select>
        <input type="number" name="num2" placeholder="Segundo nuemero">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
        //si existe "submit" imprimimos el resultado en un div
     if (isset($_POST['submit'])) {
         ?>
    <div>
        <?php echo(isset($resultado)) ? "Resultado de la operacion: " . $resultado : "Algo has echo mal!"  ?>
    </div>
    <?php
     }
     ?>

</body>

</html>