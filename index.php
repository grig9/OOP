<?php
session_start();
require_once 'Flash/Flash.php';
require_once 'Router/Router.php';
require_once 'Router/Router2.php';
require_once 'Router/AccountController.php';
require_once 'Validator.php';

// $routes = require 'Router/routes.php';
// $route = new Router($routes);
// $route->run();


// Flash::set('success', 'This is success message!!!');
// // Flash::del('success');

// echo '<br>';
// Flash::display('success');

$route = new Route2(require 'Router/routes2.php');
$route->run();
echo "<br>";
$validator = new Validator();
var_dump($validator->isEmail('example.user@gmail.com') );
var_dump($validator->inLength( 'example.user@gmail.com', 5, 22) );
var_dump($validator->inRange(1123, 1023, 1100) );
var_dump($validator->isDomain('www.google.ru') );