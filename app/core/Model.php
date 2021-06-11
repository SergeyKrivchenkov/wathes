<?php

namespace app\core;


abstract class Model
{

    protected $db;

    public function __construct()
    {
        // $this->db = new Db();
        $this->db = Db::instance();


        // echo "model";
        // echo $this->singletone;
    }
}
