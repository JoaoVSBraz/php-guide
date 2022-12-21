<?php
    define('CLASSES', $_SERVER['DOCUMENT_ROOT'] . '/exercicios/classes/');
    define('CLIENTE', $_SERVER['DOCUMENT_ROOT'] . '/exercicios/classes/cliente');
    
    spl_autoload_register('loadClasses');
    spl_autoload_register('loadCliente');

    function loadClasses($class){
        set_include_path(CLASSES);
        if(file_exists(CLASSES . "$class.php")){
            require_once(CLASSES . "$class.php");
        }
    }

    function loadCliente($class){
        set_include_path(CLIENTE);
        if(file_exists(CLIENTE . "$class.php")){
            require_once(CLIENTE . "$class.php");
        }
    }
?>