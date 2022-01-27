<?php

class Flash 
{
  public function __construct() 
  {
    if (!isset($_SESSION)) {
      session_start();
    }
  }

  public function set($key, $message) 
  {
    $_SESSION[$key] = $message;
  }
  
  public function get($key)
  {
    if($this->exists($key)) {
      return $_SESSION[$key];
    } 
    return false;    
  }

  public function del($key)
  { 
    unset($_SESSION[$key]);
  }

  public function exists($key) {
    return isset($_SESSION[$key]);
  }

  public function destroy() {
    session_destroy();
  }
}