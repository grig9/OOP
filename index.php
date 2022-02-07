<?php
require 'application/lib/Dev.php';
// require 'application/MyClass.php';

use application\core\Router;
use application\MyClass;

// функция автозагрузки классов
spl_autoload_register(function ($class) {
  $root = $_SERVER['DOCUMENT_ROOT'];
  $ds   = DIRECTORY_SEPARATOR;

  $path = $root . $ds . str_replace('\\', $ds, $class) . '.php';
  if(file_exists($path)) {
    require $path;
  } else {
    echo "class $path  not exists";
  }
});

session_start();

$my_class = new MyClass();

$router = new Router();
$router->run();