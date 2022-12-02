<?php
use App\Router;
use App\Exceptions\NotFoundException;

$router = new Router();

$router->register('/', function () {
    return 'HomePage';
});

$router->register('/contact', function () {
    return 'Contact Page';
});

try {
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (NotFoundException $e) {
    echo $e->getMessage();
}