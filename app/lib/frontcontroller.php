<?php

namespace MVC\LIB;

use MVC\CONTROLLERS\AbstractController;

class FrontController extends AbstractController
{

    const NOT_FOUND_ACTION = "notFoundAction";
    const NOT_FOUND_CONTROLLER = "MVC\CONTROLLERS\NotFoundController";

    protected $_controller = "index";
    protected $_action = "default";
    protected $_params = array();

    protected $_template;

    public function __construct (Template $template) {
        $this->_template = $template;
        $this->_parseUrl();

    }

    private function _parseUrl() {
        $url = explode("/", trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/"), 3);
        if(isset($url[0]) && $url[0] != "") {
            $this->_controller = $url[0];
        }

        if(isset($url[1]) && $url[1] != "") {
            $this->_action = $url[1];
        }

        if(isset($url[2]) && $url[2] != "") {
            $this->_params = explode("/", $url[2]);
        }
    }

    public function dispatch() {
       
        $controllerClassName = "MVC\CONTROLLERS\\" . ucfirst($this->_controller) . "Controller";
        if(!class_exists($controllerClassName)) {
            $controllerClassName = self::NOT_FOUND_CONTROLLER;
        }

        $controller = new $controllerClassName();
        $actionName = $this->_action . "Action";
        if(!method_exists($controller, $actionName)) {
            $this->_action = $actionName = self::NOT_FOUND_ACTION;
        }

        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_params);
        $controller->setTemplate($this->_template);
        $controller->$actionName();
        
    }
}


