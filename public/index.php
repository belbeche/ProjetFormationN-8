<?php

use Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'myapp');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

$url = $_GET['url'];
$router = new Router($url);


$router->get('/', 'App\Controllers\AnnonceController@welcome');
$router->get('/posts', 'App\Controllers\AnnonceController@index');
$router->get('/posts/:id', 'App\Controllers\AnnonceController@show');
$router->get('/tags/:id', 'App\Controllers\AnnonceController@tag');
$router->run();
