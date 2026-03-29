<?php 

namespace MVC\LIB;


/**
 * Application Constants
 */


define("DS", DIRECTORY_SEPARATOR);  // DIRECTORY_SEPARATOR is a built-in PHP constant: / on Linux/macOS and \ on Windows ==> This makes your code work on any OS.
define("APP_PATH", dirname(realpath(__FILE__)) . DS . ".."); // __FILE__ => current file path (APP_PATH points to your project’s root directory.)
define("APP_VIEWS", APP_PATH . DS . "views" . DS);
define('TEMPLATE_PATH',  APP_PATH . DS . "template" . DS);

define('CSS',  '/css/');
define('JS',  '/js/');

/**
 * Registering autoload function
 */
class Autoload
{
    public static function autoload($className) {
        $className = str_replace("MVC", "", $className);
        $className = str_replace("\\", "/", $className);
        $className = $className . ".php";
        $className = strtolower($className);
        if(file_exists(APP_PATH . $className)) {
            require_once APP_PATH . $className;
        }
    }
} 

spl_autoload_register(__NAMESPACE__. "\Autoload::autoload"); // Whenever a class is used but not loaded, call this function

// print_r(get_declared_classes()); ==> to see the builded classes (we can use also class_exists('app\Controllers\HomeController', false) )
// PHP will automatically trigger your autoload function if the class is not already loaded. after you called : new \app\Controllers\HomeController();
