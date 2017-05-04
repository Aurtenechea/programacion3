<?php
class Router
{
    /*  Es un array de claves, con indices de rutas. Para cada ruta un array
        de claves con un controlador y un metodo.
        $route = [  'routeA' => [
                                'controller' => 'controlerA',
                                'method' => 'methodA'
                            ],
                    'routeB' => [
                                'controller' => 'controlerB',
                                'method' => 'methodB'
                            ],
                ]*/
    public static $routes = [];

    private function __construct(){

    }

    /* agregar rutas */
    public static function add($route, $controller, $method){
        static::$routes[$route] = [
                                    "controller" => $controller,
                                    "method" => $method
                                ];
    }

    /*  Obtener acciones asociadas a las rutas.
        Basado en una ruta devuelve el controlador y el metodo asociado a ella. */
    public static function getAction($route){

        if ( array_key_exists($route, static::$routes) ){

            return static::$routes[$route];

        }else{

            throw new Exception("The route $route was not found");

        }

    }
}
