<?php

namespace MVC\CONTROLLERS;

use MVC\MODELS\EmployeeModel;
 
class EmployeeController extends AbstractController
{
    use \MVC\LIB\InputFilter;
    use \MVC\LIB\Helper;

    public function defaultAction() {
        $this->_data["employees"] = EmployeeModel::getAll();
        
        $this->_views();
    }

    public function addAction() {        
        if(isset($_POST["submit"])) {
            $emp            =   new EmployeeModel();
            $emp->name      =   $this -> filterString($_POST["name"]);
            $emp->age       =   $this -> filterInt($_POST["age"]);
            $emp->address   =   $this -> filterString($_POST["address"]);
            $emp->salary    =   $this -> filterFloat($_POST["salary"]);
            $emp->tax       =   $this -> filterFloat($_POST["tax"]);
            if($emp->save()) {
                $_SESSION["employee"] = "Employee saved Successfully";
                $this->redirect("/employee");
            }
            var_dump($emp);
        }
        $this->_views();
    }
 
}