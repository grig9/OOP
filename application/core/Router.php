<?php

//пространство имен
namespace application\core;

class Router 
{
  protected $routes = [];
  protected $params = [];

  public function __construct()
  {
    $arr = require 'application/config/routes.php';
    foreach($arr as $key => $val) {
      $this->addReg($key, $val);
    }
  }

  // функция добавляет ключам регулярное выражение #^key$#
  public function addReg($route, $params) {
    $route = '#^'.$route.'$#';
    $this->routes[$route] = $params;
  }

  public function my_match() {
    $url = ltrim($_SERVER['REQUEST_URI'], '/');
    foreach($this->routes as $route => $params) {
      if (preg_match($route, $url)) {
        $this->params = $params;
        return true;
      }
    }
    return false;
  }

  public function run() {
    if ($this->my_match()) {
      $path = 'application\controllers\\' . ucfirst($this->params['controller']) . "Controller";
      if (class_exists($path)) {
        $action = $this->params['action']. 'Action';
        if(method_exists($path, $action)) {
          $controller = new $path($this->params);
          $controller->$action();
        } else {
          echo "Не найден екшен - $action";
        }
      } else {
        echo "Не найден контроллер - $path";
      }

    } else {
      echo "маршрут не найден";
    }
  }
  

}