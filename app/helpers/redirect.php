<?php

function redirect (string $to = null)
{
    
    header('HTTP/1.1 302 Found');
    $local = ($to ? url($to) : url());
    
    return header("Location: {$local}");

}

function setMessageAndRedirect($index, $message, $redirectTo){
    setFlash($index, $message);
    return redirect($redirectTo);
}