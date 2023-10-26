<?php

namespace Matthiasdevers\Website\Core;

class Router
{

    protected array $routes;

    public function add(string $path, string $view, array $arguments): void
    {
        $this->routes[] = [
            "path"      => $path,
            "view"      => $view,
            "arguments" => $arguments
        ];
    }

    public function run(): void
    {
        $request = $_SERVER["REQUEST_URI"];
        
        foreach($this->routes as $route) {
            if($route["path"] === $request) {
                View::render($route["view"], $route["arguments"]);
                return;
            }
        }

        View::render("404.php", ["arguments"]);
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

}