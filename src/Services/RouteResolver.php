<?php

namespace App\Services;

use App\Interfaces\ResolveRouteInterface;

class RouteResolver implements ResolveRouteInterface
{
    protected array $routes;

    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }

    public function resolve(string $route)
    {
        if ($route = $this->getController($route)) {
            return $this->fetch($route);
        }
    }

    protected function getController($route)
    {
        return $this->routes[$route];
    }

    public function fetch(array $element)
    {
        [$class, $function] = $element;
        return (new $class())->$function();
    }
}
