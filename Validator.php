<?php
// Цель - сделать простой валидатор. 
// Как я хочу использовать класс.
  // $validator = new Validator();
  // $validator->метод(аргументы);
// Создаю методы, которые принимают аргументы и возварщают true or false 

class Validator 
{
  public function isEmail($str) 
  {
    if( preg_match('/.+@.+\..+/', $str) ) {
      return true;
    }  
    return false;
  }

  public function inLength($str, $from, $to) 
  {
    $str_length = strlen($str);

    if( $str_length >= $from and $str_length <= $to) {
      return true;
    } 
    return false;
  }

  public function inRange($numb, $from, $to) {
    if( $numb >= $from and $numb <= $to) {
      return true;
    } 
    return false;
  }

  public function isDomain($str) {
    if( preg_match('#^(?:[-A-Za-z0-9]+\.)+[A-Za-z]{2,6}$#', $str) ) {
      return true;
    }  
    return false;
  }

}