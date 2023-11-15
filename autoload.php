<?php 
spl_autoload_register(function($class) {
    $file = __DIR__ . "\\" . $class . ".php";

    require $file;
});