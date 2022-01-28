<?php
session_start();
require_once 'Flash/Flash.php';
require_once 'Router/Router.php';

Flash::del('success');
echo Flash::get('error');

echo "<br>";
$route = new Router();
// var_dump($_SESSION);die;