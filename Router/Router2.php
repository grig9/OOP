<?php
// цель - создать простой маршрутизатор
// разбираюсь что такое маршрутизатор, как он работает.
// интерфейс, как я хочу им пользоваться
  // $route = new Route($array_routes);
  // $route->run();
// создаем конструктор принимающий ассоциативный массив
// создаем метод run()

class Route2 {
  protected $routes;

  public function __construct($routes) {
    $this->routes = $routes;
  }

  public function run() {
    $route = $_SERVER['REQUEST_URI'];
    if(array_key_exists($route, $this->routes)) {
      include( $this->routes[$route] );
      return true;
    } else {
        echo "Маршрут не найден 404";
        return false;
    }
  }
}