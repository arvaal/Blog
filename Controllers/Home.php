<?php

namespace Controllers;

class Home {

    private $name;

    public function home() {
        echo 'Это главная страница';
    }

    public function welcome($name) {
        echo 'Привет ' . $name;
    }

}
