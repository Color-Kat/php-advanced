<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        $arr = require APP . '/config/routes.php';

        foreach ($arr as $route => $params) {
            $this->add($route, $params);
        }
    }

    public function add($route, $params)
    {
        $route = str_replace('/', '\/', $route);
        $route = preg_replace("/\/$/", "", $route);
        $this->routes[$route] = $params;
    }

    public function match()
    {
        $url = $_SERVER['REQUEST_URI'];

        foreach ($this->routes as $route => $params) {
            if (preg_match(
                '/^' . $route . '$/',
                $url,
                $matches
            )) {
                $this->params = $params;
                return true;
            }
        }

        return false;
    }

    public function run()
    {
        if ($this->match()) {
            // dump($this->params);

            $controllerPath = '\app\controllers\\' . ucfirst($this->params['controller']) . 'Controller.php';
            if (!class_exists($controllerPath))
                throw new \Exception("Controller not found - [$controllerPath]");
            $controller = new $controllerPath;
        } else {
            echo 'Route is not found!';
        }
    }
}
