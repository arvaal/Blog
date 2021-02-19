<?php

namespace Controllers;

class Home {

    private $name;

    public function home() {
        include '/var/www/html/Blog/Views/Default/Home/Home.tpl';
    }

    public function welcome($name) {
        echo 'Привет ' . $name;
    }

}
