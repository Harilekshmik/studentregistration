<?php

  include "../header.php";
  include_once "../controllers/student_controller.php";

  if(isset($_POST['submit'])){
    $Reg_no=$_POST['Reg_no'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $Mobile=$_POST['Mobile'];
	$Dept_name=$_POST['Dept_name'];
    $Course_name=$_POST['Course_name'];
	$Password=$_POST['Password'];
    $Email=$_POST['Email'];
    $Name=$_POST['Name'];
	$Sem_no=$_POST['Sem_no'];
    $Years=$_POST['Years'];
    
    
    
    $con=new student_controller();
    $con->save_data($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
  }
?>
<body style="background-image:url('img/1.jpg');
background-repeat:no-repeat;
background-size:cover;">
<div class="row">
  <div class="login" style="text-align: center;">
   <form action="" method="post">
    <h1>   Student Registration </h1>
	<input type="text" name="Reg_no" class="fld" placeholder="Registration Number"> <br>
	<input type="text" name="Fname" class="fld" placeholder="First Name"> <br>
	<input type="text" name="Lname" class="fld" placeholder="Last Name"> <br>
	<input type="text" name="Mobile" class="fld" placeholder="Mobile"> <br>
	<select name="Dept_name" class="fld"> 
        <option>select</option>
		<option value="bca">BCA</option>
        <option value="mca">MCA</option>
        <option value="btech"> B.Tech</option>
        <option value="mtech"> M.Tech</option>
        <option value="phd"> PHD</option>
    </select> <br>
	
	<select name="Course_name" class="fld">
        <option>select</option>
		<option value="cse">CSE</option>
        <option value="eee">EEE</option>
        <option value="ece">ECE</option>
        <option value="aero">AERO</option>
        <option value="it"> IT</option>
    </select><br>
	
	<input type="password" name="Password" class="fld" placeholder="Password"> <br>
	<input type="password" name="cpassword" class="fld" placeholder="Confirm Password"><br>
	<input type="text" name="Email" class="fld" placeholder="Email"><br>
	<input type="text" name="Name" class="fld" placeholder="User Name"> <br>
	
	<select name="Sem_no" class="fld">
        <option>select</option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5"> 5</option>
        <option value="5"> 6</option>
        <option value="5"> 7</option>
        <option value="5"> 8</option>
    </select> <br>
	
	
	 
	<input type="date" name="Years" class="fldx"> 
	
	
	
	
	<input type="submit" name="submit" class="btn" value="Log In">
	<input type="submit" name="reset" class="btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
 </div>
</div>

<?php
   include "../views/footer.php";
?>
