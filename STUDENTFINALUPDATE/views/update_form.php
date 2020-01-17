<?php

 include "header.php";
 include_once "../controllers/student_controller.php";
 include_once('../config/connection.php');
 $host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "sturms"; 

$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
 $connection = new PDO($dsn, $username, $password, $options);

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
    $con->update_data($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
  }

 $sel  = "Select * from student where Fname='$Fname'";
            $statement = $connection->prepare($sel);
            $statement->execute();
            $result = $statement->fetchAll();
            if ($result && $statement->rowCount() > 0)
            {
            ?>
          <h2>EDIT</h2>
          
<?php       foreach ($result as $row) { ?>
<div class="row">
  <div class="login">
   <form action="" method="post">
    <h1>   Student Profile Edit </h1>
	<input type="text" name="reg_no" class="fld" value="<?php echo $row['Reg_no'];?>">
	<input type="text" name="fname" class="fld" value="<?php echo $row['Fname'];?>">
	<input type="text" name="lname" class="fld" value="<?php echo $row['Lname'];?>">
	<input type="text" name="mobile" class="fld" value="<?php echo $row['Mobile'];?>">
	<input type="text" name="email" class="fld" value="<?php echo $row['Email'];?>">
	
	<select name="dept" class="fld">
        <option value="<?php echo $row['Dept_name'];?>"> <?php echo $row['Dept_name'];?> </option>
		<option value="bca">BCA</option>
        <option value="mca">MCA</option>
        <option value="btech"> B.Tech</option>
        <option value="mtech"> M.Tech</option>
        <option value="phd"> PHD</option>
    </select>
	<select name="course" class="fld">
        <option value="<?php echo $row['Course_name'];?>"><?php echo $row['Course_name'];?> </option>
		<option value="cse">CSE</option>
        <option value="eee">EEE</option>
        <option value="ece">ECE</option>
        <option value="aero">AERO</option>
        <option value="it"> IT</option>
    </select><br>
	 
	<input type="date" name="d_from" class="fldx" value="<?php echo $row['Years'];?>"> to
	<input type="date" name="d_to" class="fldx">
	<select name="sem" class="fld">
        <option value="<?php echo $row['Sem_no'];?>"><?php echo $row['Sem_no'];?></option>
		<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5"> 5</option>
        <option value="5"> 6</option>
        <option value="5"> 7</option>
        <option value="5"> 8</option>
    </select>
	<input type="text" name="user_name" class="fld" value="<?php echo $row['Name'];?>">
	<input type="text" name="password" class="fld" value="<?php echo $row['Password'];?>">
	<input type="text" name="cpassword" class="fld" placeholder="Confirm Password"><br>
	
	<input type="submit" name="Update" class="btn" value="Log In">
	<input type="submit" name="reset" class="btn" value="Reset"><br>
	<a href="forgot_password.php"> Forgot Password </a>
   </form>
 </div>
</div>

<?php } ?>
       
    <?php } else { ?>
        <blockquote>No results found.</blockquote>
    <?php } ?>