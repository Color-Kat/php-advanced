<?php

define('APP', __DIR__);
define('ROOT', __DIR__ . '/..');

$router = new app\core\Router;
$router->run();
