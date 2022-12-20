<?php
    define('CLASSES', $_SERVER['DOCUMENT_ROOT'] . '/exercicios/classes/');
    
    spl_autoload_register('loadClasses');

    function loadClasses($class){
        set_include_path(CLASSES);
        if(file_exists(CLASSES . "$class.php")){
            require_once(CLASSES . "$class.php");
        }
    }
?>