<?php

namespace app\support;

class RequestType {

    public static function get ()
    {
        // Transforma o tipo de requisição em letras minúsculas
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}