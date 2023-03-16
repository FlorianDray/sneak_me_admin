<?php


class Router
{    
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $controllersBasePath = './controllers/';
        $availableRouteNames = array_keys(AVAILABLE_ROUTES);
        if (!isset($_GET['page']) || !in_array($_GET['page'], $availableRouteNames, true)) {
            if(realpath($controllersBasePath . DEFAULT_ROUTE.'.php')){         
                require realpath($controllersBasePath . DEFAULT_ROUTE.'.php');
                $controllerName = DEFAULT_ROUTE;
                $controller =  new $controllerName();             
            }else{
                echo '404 not found';
            }       
        }else{                               
            require realpath($controllersBasePath . AVAILABLE_ROUTES[$_GET['page']].'.php');
            $controllerName = AVAILABLE_ROUTES[$_GET['page']];
            $controller =  new $controllerName(); 
        }
        return $controller;
    }
}