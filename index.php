<?php
include 'app/lib/debug.php';
include 'app/config/pathes.php';

use app\core\Router;
// use app\controllers\MainController;
// use app\controllers\AboutController;

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once "{$class}.php";
});

$router = new Router(); // описываем работу с маршрутами
$router->run(); // тправлеяем в работу описанные вещи в роутере
// $main = new MainController('about');
// $main->indexAction();


// $about = new AboutController();
// $about->indexAction();
