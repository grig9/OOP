<?php
//
class Flash 
{
  static function set($key, $message) 
  {
    $_SESSION[$key] = $message;
  }
  
  static function get($key)
  {
    if(Flash::exists($key)) 
    {
      return $_SESSION[$key];
    } 
    return false;    
  }

  static function del($key)
  { 
    unset($_SESSION[$key]);
  }

  static function exists($key) 
  {
    return isset($_SESSION[$key]);
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