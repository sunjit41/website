<?php
$path = strtolower(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

session_start();

// Load required files
require_once __DIR__ . '/../src/router.php';
require_once __DIR__ . '/../classes/database.php';
require_once __DIR__ . '/../src/models/quote.php';
require_once __DIR__ . '/../src/models/software.php';
require_once __DIR__ . '/../classes/config.php';


$router = new Router;

$router->add("/", function() {
    require __DIR__ ."/../src/views/home.php";
});

$router->add("/home", function() {
    require __DIR__ . "/../src/views/home.php";
});

$router->add("/credentials", function() {
    require __DIR__ ."/../src/views/certs.php";
});

$router->add("/apps/{id}", function($id) {
    require __DIR__ . "/../src/views/apps.php";
});

$router->add("/codes", function() {
    require __DIR__ . "/../src/views/codes.php";
});

$router->add("/error", function() {
    require __DIR__ . "/../src/views/error404.php";
});

$router->add("/contact", function() {
    require __DIR__ . "/../src/views/contact.php";
});

$router->add("/publicip", function() {
    require __DIR__ . "/../src/views/publicip.php";
});

$router->add("/kel/db", function() {
    require __DIR__ . "/../src/views/keldb.php";
});

$router->dispatch($path);
?>