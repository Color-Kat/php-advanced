<?php

namespace app\controllers;

use \app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $testVar = 'it is Module View Controller!';

        $this->view->render('Main page title', compact('testVar'));
    }
}
