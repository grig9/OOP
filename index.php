<?php
session_start();
require_once 'Flash/Flash.php';
require_once 'Router/Router.php';
require_once 'Router/AccountController.php';

$routes = require 'Router/routes.php';
$route = new Router($routes);
$route->run();


Flash::set('success', 'This is success message!!!');
// Flash::del('success');

echo '<br>';
Flash::display('success');