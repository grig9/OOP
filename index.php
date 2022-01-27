<?php
require_once 'Flash.php';

$flash = new Flash();

$flash->set('error', 'This is error message!!');

echo $flash->get('error');

$flash->destroy();

echo $flash->get('error');

var_dump($_SESSION);die;