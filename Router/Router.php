<?php

// Видоеуроки PHP
class Router 
{
  protected $routes = [];
  protected $params = [];

  public function __construct()
  {
    $arr = require 'routes.php';
    // var_dump($arr);
    foreach($arr as $key => $val) {
      $this->add($key, $val);
    }

    var_dump($this->routes);
  }

  public function add($route, $params) {
    $route = '#^'.$route.'$#';
    $this->routes[$route] = $params;
  }

  public function my_match() {
    $url = $_SERVER['REQUEST_URI'];
  }

  public function run() {
    echo "start";
  }
  

}