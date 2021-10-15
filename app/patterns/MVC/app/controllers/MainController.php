<?php

namespace app\controllers;

use \app\core\Controller;
use \app\lib\Db;

class MainController extends Controller
{
    public function indexAction()
    {
        $testVar = 'it is Module View Controller!';

        $db = new Db();

        $this->view->render('Main page title', compact('testVar'));
    }
}
