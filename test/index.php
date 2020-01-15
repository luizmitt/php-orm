<?php

require __DIR__ . '/../vendor/autoload.php';

use \Lz\PhpOrm\Drivers\Mysql;
use \Test\Users;

$mysql = new Mysql();
$mysql->connect([
  'server' => '172.17.0.3',
  'database' => 'php_orm',
  'user' => 'root',
  'password' => '123456'
]);

$user = new Users($mysql);
$user->first();

echo $user->username;