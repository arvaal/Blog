<?php

namespace Controllers;

use Views\View;

class Home {

    private $name;
    private $view;
    private $title;


    public function __construct() {
        $this->view = new View(DIR_APP . 'Views/Default/Home');
        
    }

    public function home() {
        $this->title = 'Статьи блога';
        $articles = [
            ['name' => 'Первая статья', 'text' => 'Текст первой статьи'],
            ['name' => 'Вторая статья', 'text' => 'Текст второй статьи']
        ];
        
        $this->view->render('Home.tpl', ['title' => $this->title, 'articles' => $articles]);
        
    }

    public function welcome($name) {
        $this->title = 'Приветствуем тебя, ' . $name;
        $this->view->render('Welcome.tpl', ['title' => $this->title,'name' => $name]);
    }

}
