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
        }
        $this->_views();
    }

    public function editAction() {
        $id = $this -> filterInt($this->_params [0]);
        $emps = EmployeeModel::getByPK($id);
        if($emps === false) {
            $this->redirect("/employee");
        }

        $this->_data["employees"] = $emps;
        
        if(isset($_POST["submit"])) {
            $emps->name      =   $this -> filterString($_POST["name"]);
            $emps->age       =   $this -> filterInt($_POST["age"]);
            $emps->address   =   $this -> filterString($_POST["address"]);
            $emps->salary    =   $this -> filterFloat($_POST["salary"]);
            $emps->tax       =   $this -> filterFloat($_POST["tax"]);

            if($emps->save()) {
                $_SESSION["employee"] = "Employee saved Successfully";
                $this->redirect("/employee");
            }
        }
        $this->_views();
       
    }

    
 
}