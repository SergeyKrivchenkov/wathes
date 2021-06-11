<?php


namespace app\core;

session_start();
// session_destroy();


abstract class Controller
{
    protected $route;
    protected $view;
    protected $model;
    public function __construct($route)
    {
        $this->route = $route;
        // debug($route);
        $this->view = new View($route);
        $model_name = '\app\models\\' . ucfirst($route['controller']);
        $this->model = new $model_name;
        // debug($this->model);


        // if (empty($_SESSION['currency'])) {
        //     $code = 'USD';
        //     $initialCurrency = $this->getInitialCurrency($code);
        //     debug($initialCurrency);
        //     // $_SESSION['currency'] = 'USD';
        // };
    }

    private function getInitialCurrency($code)
    {
        $stmt = "SELECT * FROM currency WHERE code = '{$code}'";
        $query = $this->model->db->query($stmt, \PDO::FETCH_ASSOC);
        $data = $query->fetchAll();
        return $data;
    }


    public function isAjax()
    {

        //метод проверяет был ли аякс запрос или нет. Если да - то возвр Истина, иначе - Ложь

        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }
}
