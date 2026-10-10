<?php
$path = strtolower(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

include "router.php";

$router = new Router;

$router->add("/", function() {
    require "views/home.php";
});

$router->add("/home", function() {
    require "views/home.php";
});

$router->add("/credentials", function() {
    require "views/certs.php";
});

$router->add("/apps/{id}", function($id) {
    require "views/apps.php";
});

$router->add("/codes", function() {
    require "views/codes.php";
});

$router->add("/error", function() {
    require "views/error404.php";
});

$router->add("/astrology", function() {
    require "views/astrology.php";
});

$router->add("/contact", function() {
    require "views/contact.php";
});

$router->add("/publicip", function() {
    require "views/publicip.php";
});

$router->add("/download/{id}", function($id) {
    require "download.php";
});

$router->add("/database", function() {
    require "classes/database.php";
});

$router->add("/test", function() {
    require "test.php";
});

$router->add("/test2", function() {
    require "test2.php";
}); 

$router->add("/kel/db", function() {
    require "views/keldb.php";
});

$router->dispatch($path);
?>