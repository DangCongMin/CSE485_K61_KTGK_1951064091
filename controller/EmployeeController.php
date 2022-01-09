<?php
    require_once 'model/EmployeeModel.php';
    class EmployeeController{
      
        function index(){
           
            $empModel = new EmployeeModel();
            $emps = $empModel->getAllEmps();
           
            require_once 'view/employee/index.php';
        }

        function add(){
            
        }

        function edit(){
            
        }
    }



?>