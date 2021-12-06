<?php

use App\Models\Router;
use App\Services\RouteResolver;

require __DIR__ . '/../vendor/autoload.php';

$routes = include(__DIR__ . '/../routes.php');

$resolver = (new RouteResolver());
$resolver->setRoutes($routes);

$route = $_SERVER['REQUEST_URI'];

$output = (new Router($resolver, $route))->resolve($route);

print json_encode($output);
