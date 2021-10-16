<?php

namespace app\controllers;

use \app\core\Controller;

class PostController extends Controller
{
    public function postsAction()
    {
        $products = $this->model->getProducts();

        $this->view->render('Posts list', ['products' =>  $products]);
    }

    public function postAction($id)
    {
        $this->view->render("Post reading");
    }
}
