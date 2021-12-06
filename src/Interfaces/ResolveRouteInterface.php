<?php

namespace App\Interfaces;

interface ResolveRouteInterface
{
    public function setRoutes(array $routes): void;
    public function routeExists(string $route): bool;
    public function resolve(string $route);
}
