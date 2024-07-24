<?php

namespace app\support;

class Uri {

    public static function get ()
    {
        // Pega o uri da url
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        // Tira o url
        $uri = substr($uri, 11);

        return $uri;
    }

}