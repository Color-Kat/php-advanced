<?php

namespace app\controllers;

use \app\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        // $this->view->redirect('/account/registrati on');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo json_encode(['status' => 'success', 'body' => 123]);
        } else
            $this->view->render('Login page');
    }

    public function registrationAction()
    {
        $this->view->render('registration page');
    }
}
