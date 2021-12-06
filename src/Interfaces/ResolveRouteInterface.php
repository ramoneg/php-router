<?php

namespace App\Interfaces;

interface ResolveRouteInterface
{
    public function setRoutes(array $routes): void;
    public function resolve(string $route);
}
