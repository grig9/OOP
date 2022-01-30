<?php
// 1. Цель - создать простой класс для работы с flash сообщениями(класс просто обертка для функции)
// 2. Интерфейс. Как бы я хотел пользоватся классом.
// вызов Flash::метод(данные);
// 3. Реализация класса
//  3.1 создал метод для записи сообщения по ключю
//  3.2 создал метод для получения сообщения по ключю
//  3.3 создал метод для удаления записи
//  3.4 создал метод для проверки на существования ключа

class Flash 
{
  public static function set($key, $message) 
  {
    $_SESSION[$key] = $message;
  }
  
  public static function get($key)
  {
    if(Flash::exists($key)) 
    {
      return $_SESSION[$key];
    } 
    return false;    
  }

  public static function del($key)
  { 
    unset($_SESSION[$key]);
  }

  public static function exists($key) 
  {
    return isset($_SESSION[$key]);
  }

  public static function display($key) 
  {
    if(Flash::exists($key)) {
      echo $_SESSION[$key];
    }
  }
}