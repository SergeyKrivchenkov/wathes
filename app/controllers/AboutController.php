<?php

namespace app\controllers;

use app\core\Controller;


class AboutController extends Controller
{
    public function indexAction()
    {
        // echo '<br>' . " Контроллер: " . __CLASS__ . "|Экшен: " . __METHOD__;
        $this->model->getInfo();
        $this->view->render(1);
    }
    public function change_currnecyAction()
    {

        echo  'HELLO 2323232323';
    }
}
