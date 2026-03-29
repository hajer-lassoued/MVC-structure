<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../app/lib/autoload.php";
require_once '..' . DS . 'app' . DS . 'config' . DS . 'config.php';
$template_parts = require_once '..' . DS . 'app' . DS . 'config' . DS . 'templateconfig.php';
//echo '..' . DS . 'app' . DS . 'config.php';
session_start();
use MVC\LIB\FrontController;
use MVC\LIB\Template;
$template = new Template();
$frontController = new FrontController($template);
$frontController->dispatch();