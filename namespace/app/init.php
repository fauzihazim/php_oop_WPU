<?php
    // require_once 'Product/User.php';
    // require_once 'Service/User.php';
    
    spl_autoload_register(function($class){
        $class = explode('\\', $class);
        $class = end($class);
        require_once __DIR__ . "/Product/" . $class . ".php";
    });

    spl_autoload_register(function($class){
        $class = explode('\\', $class);
        $class = end($class);
        require_once __DIR__ . "/Service/" . $class . ".php";
    });
?>