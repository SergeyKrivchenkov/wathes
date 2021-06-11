<?php

namespace app\core;

trait TSingletone
{
    // public $singletone = 'TSingletone';

    private static $instance;

    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
