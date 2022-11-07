<?php

$uri = parse_url($_SERVER["REQUEST_URI"]) ["path"];

$routes = [
    "/" => "controllers/index.con.php",
    "/register" => "controllers/register.con.php",
    "/login" => "controllers/login.con.php",
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    require "functions.php";
    abort(); 
};