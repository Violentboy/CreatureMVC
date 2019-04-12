<?php
// Format: dd-mm-yyyy
$string = '21-11-2015';

// Год 2015, месяц 11, день 21
$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

// $3, $2, $1 => это подмаски, номера регулярного выражения. Переставляем местами.
// $3 => ([0-9]{4})  $2 => ([0-9]{2})   $1 => ([0-9]{2})
$replacement = "Год $3, месяц $2, день $1"; 

echo preg_replace($pattern, $replacement, $string);
die;

//FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', __DIR__);
require_once (ROOT. '/components/Router.php');

// 3. Установка соединения с БД

// 4. Вызов Router
$router = new Router();
$router->run();