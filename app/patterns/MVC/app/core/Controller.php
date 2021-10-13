<?php

namespace app\core;

use app\core\View;

abstract class Controller
{   
    /**
     * @var view instance of View class 
     */
    protected $view;

    public function __construct($route)
    {
        $this->view = new View($route);
    }
}
