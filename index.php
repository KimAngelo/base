<?php
ob_start();

require "vendor/autoload.php";

use CoffeeCode\Router\Router;

date_default_timezone_set('America/Sao_Paulo');

//Inicio das rotas
$router = new Router(url(), ":");
$router->namespace("Source\Controller");

/**
 * WEB
 */
$router->group(null);
$router->get("/", "Web:home");


/**
 * ERROR ROUTES
 */
$router->group("/ops");
$router->get("/{errcode}", "Web:error");

/**
 * ROUTE
 */
$router->dispatch();

/**
 * ERROR REDIRECT
 */
if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}

ob_end_flush();