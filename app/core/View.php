<?php

namespace app\core;

class View // это базовый класс который определяет какой конкретно класс будет подключен
{

    protected $route; // это путь из route
    protected $path; // задали название файла с видом который нужно будет подключить
    protected $layout = 'default'; // задаем шаблон (то что при отображении в браузере не будет изменяться footer, header, saidbar. Для ГИБКОГО! изменения изменения шаблона (время года, темная или светлая тема) задаем 'default')
    public function __construct($route) // снова принимаем наш массив (маршрут) с путями controller & action 
    {
        $this->route = $route; // запоминаем путь после debug($route); создаем в папке view папку main в которой созд. файл index.php (там будем отображать скорее всего верстку)
        $this->path = $route['controller'] . '/' . $route['action']; // формируем путь до файла main index

    }
    public function render($data) //отображает информацию из вида (шаблонов) на стр. для формирования визуальной формы 
    {

        // debug($data);
        //путь к шаблону который должен подключаться
        $layout = "app/views/layouts/{$this->layout}.php"; // это шаблон кот одинаков и будет подключ на каждой стр.
        $view = "app/views/{$this->path}.php"; // подключаем вид здесь, в зависимости от пути кот формируется в $this->path = $route['controller'] . '/' . $route['action']; (подключаем вид либо главной стр. либо вид каталого, либо отображение чего либо в каталоге и т.п.) 
        // путь до файла с видом кот будет отображаться в браузере


        if (file_exists($view)) {
            ob_start();

            require_once $view;
            $content = ob_get_clean();
        }



        if (file_exists($layout)) {

            require_once $layout;
        }
    }
}
