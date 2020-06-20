<?php 
    $controllerFile = "controllers/".$controller.".php";
    if(file_exists($controllerFile)){
        require_once($controllerFile);
        $controller = new $controller();
        if (method_exists($controller, $metodo)){
            $controller->{$metodo}($params);
        }else{
            require_once("controllers/error.php");

        }
    }else{
        require_once("controllers/error.php");
    }


?>
