<?php

namespace app\core;

use app\routes\Routes;
use app\support\RequestType;
use app\support\Uri;

class ControllerParams {

    public function filterParams ($router)
    {
        $uri = Uri::get();

        $explodeUri = explode('/', $uri);
        $explodeRouter = explode('/', $router);

        $params = [];
        foreach ($explodeRouter as $index => $routerSegment) {
            if($routerSegment !== $explodeUri[$index]){
                $params[$index] = $explodeUri[$index];
            }
        }

        return array_values($params);
    }
    
    
    public function get (string $router)
    {
        $routes = Routes::get();
        $requestMethod = RequestType::get();
        
        $router = array_search($router, $routes[$requestMethod]);

        $params = $this->filterParams($router);

        return array_values($params);

    }

}