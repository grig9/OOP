<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

  public function indexAction() {
    echo "Главная страница<br>";
    echo "Controller: <b>{$this->route['controller']}</b><br>";
    echo "Action: <b>{$this->route['action']}</b><br>";
  }

  public function contactsAction() {
    echo "Контакты<br>";
    echo "Controller: <b>{$this->route['controller']}</b><br>";
    echo "Action: <b>{$this->route['action']}</b><br>";
  }
}