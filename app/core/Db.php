<?php

namespace app\core;


class Db
{

    protected $db; // сюда записывается подключение описанное ниже (этот класс подключается к модели)
    use TSingletone;



    public function __construct()
    {
        $db_name = 'app/config/db_config.php';
        if (file_exists($db_name)) {
            $db_config = require_once $db_name;
        }
        try {

            $this->db = new \PDO("mysql:host={$db_config['host']};dbname={$db_config['db_name']}", $db_config['user'], $db_config['password']);
        } catch (\PDOException $e) {
            die('<b>' . "DB connect error!!!" . '</b>');
        }
    }

    public function prepare($stmt) // этот метод для работы q1 в model
    {
        return $this->db->prepare($stmt);
    }

    public function query($stmt, $mode) // этот метод для работы q1 в model
    {
        return $this->db->query($stmt, $mode); //mode это PDO::FETCH_ASSOC
    }
}
