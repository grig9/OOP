<?php
//
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

//Примеры:

// установка ключа и сообщения
// Flash::set('error', 'Error Message');

// получение сообщения с помощью переданного ключа
// Flash::get('error');

// удаление указанного ключа
// Flash::del('error');

// проверка на существование ключа
// Flash::exists('error');

// 1. Цель - создать простой класс для работы с flash сообщениями(класс просто обертка для функции)
// 2. создал метод для записи сообщения по ключю
// 3. создал метод для получения сообщения по ключю
// 4. создал метод для удаления записи
// 5. создал метод для проверки на существования ключа