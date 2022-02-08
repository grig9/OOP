<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

  public function  getNews()
  {
    $params = [
      'id' => '1',
    ];
    $result = $this->db->row('SELECT * FROM news');

    return $result;
  }
}