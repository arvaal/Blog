<?php

spl_autoload_register(function(string $name) {
    require_once '/var/www/html/Blog/' . str_replace('\\', '/', $name) . '.php';
});

$route = $_GET['route'] ?? '';
$pattern = '~^user/(.*)$~';

preg_match($pattern, $route, $matches);

if (!empty($matches)) {
    $controller = new Controllers\Home();
    $controller->welcome($matches[1]);
    return;
}

$pattern = '~^$~';
preg_match($pattern, $route, $matches);

if (!empty($matches)) {
    $controller = new Controllers\Home();
    $controller->home();
    return;
}

echo 'Страница отсутствует';

var_dump($matches);
