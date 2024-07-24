<?php

function dd($variable) {

    echo '<pre><h3>';
        print_r($variable);
    echo '</h3></pre>';

    die();
    
}