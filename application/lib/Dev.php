<?php

ini_set('display_error', 1);
error_reporting(E_ALL);

function debug($str) {
  var_dump($str);
  exit;
}