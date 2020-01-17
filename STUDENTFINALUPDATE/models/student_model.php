<?php
// Riya 

// Student Registration action page
   
	include_once "../views/header.php";
	include_once "../controllers/student_controller.php";
 	
	
    
	class student_model
	{

	     public function insert($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years)
		 {
		 include('../config/connection.php');
		 $connection = new PDO($dsn, $username, $password, $options);
	     echo $sql="INSERT INTO student (Reg_no,Fname,Lname,Mobile,Dept_name,Course_name,Password,Email,Name,Sem_no,Years)
              VALUES ('$Reg_no','$Fname','$Lname','$Mobile','$Dept_name','$Course_name','$Password','$Email','$Name','$Sem_no','$Years')";

	     $connection->exec($sql);
	     echo $sql;
         echo "New record created successfully";
	    }

	    public function update($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years)
	    {
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    echo $sql = "UPDATE student SET Reg_no='$Reg_no', Fname='$Fname', Lname='$Lname', Mobile='$Mobile',Dept_name='$Dept_name',Course_name='$Course_name',Password='$Password', Email='$Email',Name='$Name',Sem_no='$Sem_no',Years='$Years' ";
	    $stmt = $connection->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount() . " records UPDATED successfully";
    }

    public function login($Name,$Password)
	    {
	    	include('../config/connection.php');
		    $connection = new PDO($dsn, $username, $password, $options);
		    $stmt = $connection->prepare("SELECT * FROM student WHERE Name='$Name' AND Password='$Password'"); 
            $stmt->execute();
            echo "Welcome".$Name;
        }
	
	}	
/*	
catch(PDOException $e)
    {
    echo $sql . "<br> errorrrrrrrr" . $e->getMessage();
    }

     
    
*/
?>
