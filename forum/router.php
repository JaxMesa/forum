<?php

    $uri = parse_url($_SERVER["REQUEST_URI"]) ["path"];

    $routes = [
        "/" => "controllers/index.con.php",
        "/forum" => "controllers/forum.con.php",
        "/register" => "controllers/register.con.php",
        "/login" => "controllers/login.con.php",
        "/profilepage" => "controllers/profilepage.con.php"
    ];

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        require "errors.php";
        abort(); 
    };
?>