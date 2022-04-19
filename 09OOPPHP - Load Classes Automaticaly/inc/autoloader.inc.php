<?php

 //autoinclude classes
spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $path = "classes/";
    $ext = ".class.php";
    $full = $path . $className . $ext;

    include_once $full;
}