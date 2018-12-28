<?php

session_start();

// задаем путь до папки сайта
define('PATH', $_SERVER['DOCUMENT_ROOT']);

require_once (PATH . '/config.php');

$uri = $_SERVER['REQUEST_URI'];
$uriPathArray = explode('/',$_SERVER['REQUEST_URI']);

if (count($uriPathArray) > 0 && $uriPathArray[1] === 'admin') {
    require_once PATH . '/application/controller/Admin_Controller.php';
    $controller = new Admin_Controller();
    $controller->getContent();
} else {
    require_once PATH . '/application/controller/Main_Controller.php';
}