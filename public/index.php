<?php 

require_once "../app/lib/autoload.php";
error_reporting(E_ALL);
	ini_set('display_errors', 1);
use MVC\LIB\FrontController;
$frontController = new FrontController();
$frontController->dispatch();