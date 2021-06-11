<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        // echo '<br>' . " Контроллер: " . __CLASS__ . "|Экшен: " . __METHOD__;


        // $this->model->getBrands();
        $currencies = $this->model->getCurrency();
        $products = $this->model->getProduct();
        // debug($products);
        $cont = "HELLO WORLD!!!";

        // $data = [
        //     'currencies' => $currencies,
        //     'cont' => $cont
        // ]; // пишем для возможности отображения множества переменных со значением

        // $data = compact('currencies', 'cont');
        $this->view->render(compact('currencies', 'products'));

        // $this->view->render($data);



    }
    public function changeCurrencyAction()
    {
        $newCur = $_POST['cur'];
        $data = $this->model->getNewCurrency($newCur);
        $_SESSION['currency'] = $newCur;
        debug($_SESSION);
        echo json_encode($data);
    }
    // public function changeCurrnecyAction()
    // {
    //     if ($this->isAjax()) {
    //         echo  'HELLO 2323232323';
    //     }
    // }
}
