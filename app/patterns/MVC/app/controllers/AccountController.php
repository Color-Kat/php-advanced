<?php

namespace app\controllers;

use \app\core\Controller;

class AccountController extends Controller
{

    public function loginAction()
    {
        // $this->view->redirect('/account/registrati on');
        $this->view->render('Login page');
    }

    public function registrationAction()
    {
        $this->view->render('registration page');
    }
}
