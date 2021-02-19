<?php
require_once '/var/www/html/Blog/Config/Settings.php';
spl_autoload_register(function(string $name) {
    require_once DIR_APP . str_replace('\\', '/', $name) . '.php';
});

$route = $_GET['route'] ?? '';
$routes = require DIR_APP . 'Config/Routes.php';

$isRoute = false;
foreach ($routes as $pattern => $routeController) {

    preg_match($pattern, $route, $matches);

    if (!empty($matches)) {
        $isRoute = true;
        break;
    }
}

if (!$isRoute) {
    echo 'Страница отсутствует';
    return;
}

unset($matches[0]);

$controllerName = $routeController[0];
$controllerAction = $routeController[1];

$controller = new $controllerName();
$controller->$controllerAction(...$matches);