<?php

    spl_autoload_register(function($class){
        if(file_exists("libraries/".'Core/'.$class.".php")){
            require_once("libraries/".'Core/'.$class.".php");
        }
    });

?>