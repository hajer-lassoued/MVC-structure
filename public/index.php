<?php 

require_once "../app/lib/autoload.php";
require_once '..' . DS . 'app' . DS . 'config.php';
//echo '..' . DS . 'app' . DS . 'config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
use MVC\LIB\FrontController;
$frontController = new FrontController();
$frontController->dispatch();