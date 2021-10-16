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

        $params = ['id' => 1];

        $res = $db->query('SELECT * FROM test WHERE id=:id', $params);
        dump($res);

        $this->view->render('Main page title', compact('testVar'));
    }
}
