<?php

// Shows code 404 "Page not found".
function abort() {
    http_response_code(404);

    require "views/404.php";

    die();
}

function urlIs($value){
    // Returns URI of the site as value.
    return $_SERVER["REQUEST_URI"] === $value;
}