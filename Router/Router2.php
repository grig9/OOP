<?php

class Route2 {
  protected $routes;

  public function __construct($routes) {
    $this->routes = $routes;
  }

  public function run() {
    $route = $_SERVER['REQUEST_URI'];
    var_dump($route);
    if(array_key_exists($route, $this->routes)) {
      // var_dump(include( $this->routes[$route] ));
      echo "Маршрут найден";
      return true;
    } else {
        echo "Маршрут не найден";
        return false;
      }
    }


  }

  
  
;?>
