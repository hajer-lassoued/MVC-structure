<?php

namespace MVC\CONTROLLERS;

use MVC\LIB\FrontController;

class AbstractController 
{
    protected $_controller;
    protected $_action;
    protected $_params;

    protected $_data = [];

    public function notFoundAction () {
         $this->_views();
    }

    public function setController ($controllerClassName) {
        $this->_controller = $controllerClassName;
    }

    public function setAction ($actionName) {
        $this->_action = $actionName;
    }

    public function setParams ($params) {
        $this->_params = $params;
    }

    protected function _views () {
        extract($this->_data);
        if($this->_action == FrontController::NOT_FOUND_ACTION) {
            require_once APP_VIEWS . "notFound" . DS . "notFound.view.php";
        } else {
            
            $view = APP_VIEWS . $this->_controller . DS . $this->_action . ".view.php";
            if(file_exists($view)) {
                require_once TEMPLATE_PATH . "tempateheaderstart.php";
                require_once TEMPLATE_PATH . "templateheaderend.php";
                require_once TEMPLATE_PATH . "wrapperstart.php";
                require_once TEMPLATE_PATH . "header.php";
                require_once TEMPLATE_PATH . "nav.php";
                require_once $view;
                require_once TEMPLATE_PATH . "wrapperend.php";
                require_once TEMPLATE_PATH . "templatefooter.php";
            } else {
                require_once APP_VIEWS . "notFound" . DS . "notView.view.php";
            }
        } 
    }
}