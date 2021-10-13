<?php

namespace app\controllers;

use \app\core\Controller;

class PostController extends Controller
{
    public function postsAction()
    {
        $this->view->render('Posts list');
    }

    public function postAction($id)
    {
        $this->view->render("Post reading");
    }
}
