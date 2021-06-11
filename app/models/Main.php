<?php

namespace app\models;

use app\core\Model;

class Main extends Model
{
    public function getCurrency()
    {
        $stmt = "SELECT title,code FROM currency ORDER BY title"; //если нет вер можно не обрабат запрос
        $query = $this->db->query($stmt, \PDO::FETCH_ASSOC); // так как простой запрос (т.е не прописываем prepare execute так как не берем значения введенные сторонними пользователями) то \PDO::FETCH_ASSOC пишем 2 параметром
        $data = $query->fetchAll();
        return $data; // возвр в майт контр
    }

    public function getProduct()
    {
        $stmt = "SELECT * FROM product"; //если нет вер можно не обрабат запрос
        $query = $this->db->query($stmt, \PDO::FETCH_ASSOC); // так как простой запрос (т.е не прописываем prepare execute так как не берем значения введенные сторонними пользователями) то \PDO::FETCH_ASSOC пишем 2 параметром
        $data = $query->fetchAll();
        return $data; // возвр в майт контр
    }


    public function getNewCurrency($newCur)
    {
        $stmt = "SELECT code, symbol_left, symbol_right, `value` FROM currency WHERE code='{$newCur}'";
        echo $stmt;
        $query = $this->db->query($stmt, \PDO::FETCH_ASSOC);
        $data = $query->fetch();
        return $data;
    }


    public function queryBrends()
    {
        debug(123);
        $query_str = 'SELECT title FROM brand';
        $query = $this->db->prepare($query_str);
        $query->execute();
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
        // debug($data);

    }
}
