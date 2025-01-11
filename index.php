<?php

function autoload(string $trida): void
{
    require_once("classes/" . $trida . ".php");
}

spl_autoload_register("autoload");

$model = new Model();
$controller = new Controller($model);
$router = new Router();

// Definujeme routy
$router->addRoute('/', function() use ($controller) {
    $controller->showMainPage();
});

$router->addRoute('/cenik/', function() use ($controller) {
    $controller->showPriceList();
});

$router->addRoute('/sluzby/', function() use ($controller) {
    $controller->showServices();
});

$router->addRoute('/kontakt/', function() use ($controller) {
    $controller->showContact();
});


// Spuštění routování
$router->route();
