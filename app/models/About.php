<?php

namespace app\models;

use app\core\Model;

class About extends Model
{


    public function getInfo()
    {
        echo 'MODEL getPages method';
        return $this->queryBrends();
        // $arr = $this->db->queryAll('users'); // проверяем себя на доступность методов описанном в наследуемом классе
        // $arr = $this->db->queryOne('users', 'login', 'id', '5');
        // debug($arr);
    }
    public function queryBrends()
    {
        $query_str = 'SELECT title FROM brand';
        $query = $this->db->prepare($query_str);
        $query->execute();
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
        // debug($data);

    }
}
