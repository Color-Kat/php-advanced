<?php

namespace app\core;

use app\core\View;

abstract class Controller
{
    /**
     * @var array list of controller and action names
     */
    protected $route;

    /**
     * @var View instance of View class 
     */
    protected $view;

    /**
     * @var $model instance of model class 
     */
    protected $model;

    public function __construct($route)
    {
        // route of this controller
        $this->route = $route;

        // View instance
        $this->view = new View($route);

        // load model
        $modelMame = $this->loadModel($route['controller']);
        $this->model = new $modelMame();
    }

    /**
     * @param string $name name of model class
     */
    public function loadModel($name)
    {
        // namespace of model class
        $path = 'app\models\\' .  ucfirst($name);

        // error if class not found
        if (!class_exists($path)) {
            if (IS_DEV) throw new \Exception("class [" . ucfirst($name) . "] not found [$path]");
            else $this->view::errorCode(500);
        }

        return $path;
    }
}
