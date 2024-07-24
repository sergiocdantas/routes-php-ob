<?php

namespace app\core;

use Exception;
use League\Plates\Engine;

class Controller
{
    public function execute (string $router)
    {
        // Verifica se a rota possui o @ separando o nome do controe do método.
        if (!str_contains($router, '@')) {
            throw new Exception("A rota está registrada em um formato não reconhecido.");
        }

        // Separa o controle em uma variável e o método em outra.
        list($controller, $method) = explode('@', $router);

        // Variáveis com o name espace e o endereço completo.
        $namespace = "\app\controllers\\";
        $controllerNamespace = $namespace . $controller;

        // Verifica se o controle existe no namespace.
        if(!$controllerNamespace){
            throw new Exception("O controller {$controllerNamespace} não existe.");
        }

        // Instancia o controle
        $controller = new $controllerNamespace;

        // Verifica se o método existe.
        if(!method_exists($controller, $method)){
            throw new Exception("O método {$method} não existe no controller {$controllerNamespace}.");
        }

        $params = new ControllerParams;
        $params = $params->get($router);

        // Chama o controle no método.
        $controller->$method($params);
        
    }
}