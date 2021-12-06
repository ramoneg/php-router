<?php

namespace App\Models;

use App\Interfaces\ResolveRouteInterface;


class Router
{

    protected string $route;
    protected array $routes;

    protected ResolveRouteInterface $resolver;

    public function __construct(ResolveRouteInterface $resolver)
    {
        $this->resolver = $resolver;
    }

    public function resolve(string $route)
    {
        if ($this->resolver->routeExists($route)) {
            return $this->resolver->resolve($route);
        }
    }
}
