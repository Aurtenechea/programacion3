<?php

class App
{


    public function __construct(){
        $url = $this->parseUrl();

        try{
            // action va a ser un array de claves con controller y method
            $action = Router::getAction($url);

            $controllerName = $action['controller'];
            $method = $action['method'];

            /*  requiere el archivo, crea el objeto y llama al metodo, todo de forma dinamica */
            require APP_PATH."controllers/" . $controllerName . ".php";
            $controller = new $controllerName();
            $controller->$method();

        }
        catch(Exception $e){
            echo $e->getMessage();
        }

    }
    public function parseUrl(){
        if (isset($_GET['url'])){
            return $_GET['url'];
        }
    }
}
