<?php

namespace app\controllers;

use Exception;
use League\Plates\Engine;

abstract class Controller{

    protected function view (string $view, array $data = [])
    {
        $viewPath = VIEWS . $view . '.php';

        if(!file_exists($viewPath)){
            throw new Exception("A view {$view} não foi encontrada.");
        }

        $templates = new Engine(VIEWS);

        echo $templates -> render($view, $data);

    }

}