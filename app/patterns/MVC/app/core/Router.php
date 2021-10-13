<?php

namespace app\core;

use app\core\View;

class Router
{
    /**
     * @var array $routes list of routes and params (controller, action)
     */
    protected $routes = [];

    /**
     * @var array $params current controller and action names
     */
    protected $params = [];

    public function __construct()
    {
        $arr = require APP . '/config/routes.php';

        foreach ($arr as $route => $params) {
            $this->add($route, $params);
        }
    }

    /**
     * format and add routes and params to propery $routes
     * 
     * @param string $route url
     * @param array $params assocc arr with controller and action names
     */
    public function add($route, $params): void
    {
        $route = str_replace('/', '\/', $route); // add \ for /
        $route = strlen($route) > 2 ? preg_replace("/\/$/", "", $route) : $route; // remove last slash
        $this->routes[$route] = $params;
    }

    /**
     * check if the current url matches any route
     * 
     * @return bool
     */
    public function match(): bool
    {
        $url = $_SERVER['REQUEST_URI'];

        foreach ($this->routes as $route => $params) {
            if (preg_match(
                '/^' . $route . '$/',
                $url,
                $matches
            )) {
                // save data about this route in $params
                $this->params = $params;

                return true;
            }
        }

        return false;
    }

    /**
     * 
     */
    public function run()
    {
        // check if the url matches any route
        if ($this->match()) {
            // controller path
            $path = '\app\controllers\\' . ucfirst($this->params['controller']) . 'Controller';

            // class doesn't exist
            if (!class_exists($path)) {
                if (IS_DEV) throw new \Exception("Controller not found - [$path]");
                else View::errorCode(404);
                exit;
            }

            // action name
            $action = $this->params['action'] . 'Action';

            // method doesn't exist
            if (!method_exists($path, $action)) {
                if (IS_DEV) throw new \Exception("Method [$action] is not found in [$path]");
                else View::errorCode(500);
                exit;
            }

            // create controller and run action
            $controller = new $path($this->params);
            $controller->$action();
        } else {
            echo 'Route is not found!';
        }
    }
}
