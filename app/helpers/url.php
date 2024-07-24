<?php

function url(string $url = null): string
{
    $server = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $environment = ($server == 'localhost' ? URL_DEVELOPMENT : URL_PRODUCTION);

    if(str_starts_with($url, '/')){
        return $environment . $url;
    }

    return $environment . '/' .$url;
}