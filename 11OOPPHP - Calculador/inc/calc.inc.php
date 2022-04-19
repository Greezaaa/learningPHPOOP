<?php

$action = $_POST['oper'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calc = new Calculator($action, (int)$num1, (int)$num2);

try {
    $resultado = $calc->calc();
} catch (TypeError $e) {
    echo "Something go wrong!!! " . $e->getMessage();
}