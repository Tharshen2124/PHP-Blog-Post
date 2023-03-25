<?php

//parse_url() separates path from the query string (like ?name=john)
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'        => 'controllers/index.php',
    '/about'   => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

function abort($code = 404) {
    //sets the status code
    http_response_code($code);
    require "views/{$code}.php";
    die();
}


function routeToController($uri, $routes) {
    // lets u know if the array has a key of the given name that exists
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);