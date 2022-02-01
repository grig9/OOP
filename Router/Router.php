<?php

class Router 
{
  protected $routes = [];
  protected $params = [];

  public function __construct($routes)
  {
    foreach($routes as $key => $val) {
      $this->addReg($key, $val);
    }
  }

  // Добавляем ключам регулярное выражение #^key$#
  public function addReg($route, $params) {
    $route = '#^'.$route.'$#';
    $this->routes[$route] = $params;
  }

  public function my_match() {
    $url = ltrim($_SERVER['REQUEST_URI'], '/');
    var_dump($url);
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
      $path = ucfirst($this->params['controller']) . "Controller";
      if (class_exists($path)) {
        $action = $this->params['action']. 'Action';
        if(method_exists($path, $action)) {
          $controller = new $path;
          $controller->$action();
        } else {
          echo "Не найден екшен $action";
        }
      } else {
        echo "Не найден контроллер $path";
      }

    } else {
      echo "маршрут не найден";
    }
  }
  

}