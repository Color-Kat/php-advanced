<?php

namespace app\controllers;

use \app\core\Controller;
use \app\lib\Db;

class MainController extends Controller
{
    public function indexAction()
    {
        // var to display in view
        $testVar = 'it is Module View Controller!';

        $this->view->render('Main page title', compact('testVar'));
    }
}
