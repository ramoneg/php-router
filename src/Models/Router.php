<?php

namespace App\Models;

use App\Interfaces\ResolveRouteInterface;


class Router
{

    protected string $route;
    protected array $routes;

    protected ResolveRouteInterface $resolver;

    public function __construct(ResolveRouteInterface $resolver, string $route)
    {
        $this->resolver = $resolver;
        $this->route = $route;
    }

    public function resolve()
    {
        return $this->resolver->resolve($this->route);
    }
}
