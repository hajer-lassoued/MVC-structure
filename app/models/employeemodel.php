<?php

namespace MVC\MODELS;

class EmployeeModel extends AbstractModel 
{
    //public $pid;
    public $id;
    public $name;
    public $age;
    public $address;
    public $tax;
    public $salary;

    

    protected static $tableName = "employees";
    protected static $tableSchema = array(
        "id"        =>   self::DATA_TYPE_INT,
        "name"      =>   self::DATA_TYPE_STR,
        "age"       =>   self::DATA_TYPE_INT,
        "address"   =>   self::DATA_TYPE_STR,
        "tax"       =>   self::DATA_TYPE_DECIMAL,
        "salary"    =>   self::DATA_TYPE_DECIMAL
    );

    protected static $primaryKey = "id";

    /*public function __construct($id, $name, $age, $address, $tax, $salary) {

    }*/

    public function getTableName() {

    }

    /*public static function getAll() {

    }*/

}