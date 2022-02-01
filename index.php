<?php
session_start();
require_once 'Router/Router.php';
require_once 'Router/AccountController.php';
require_once 'Router/MainController.php';

$routes = require 'Router/routes.php';
$route = new Router($routes);
$route->run();