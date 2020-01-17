<?php
include_once '../models/student_model.php';

	
	 class student_controller{
	public function save_data($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years)
	{
	    echo "student";
	    $obj = new student_model();
	    $obj->insert($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
	}
	public function update_data($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years)
	{
	    echo "student edit";
	    $obj = new student_model();
	    $obj->update($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
	}
	
    public function login_data($Name,$Password)
	{
	    echo "student login";
	    $obj = new student_model();
	    $obj->login($Name,$Password);
	}
  }	 

?>