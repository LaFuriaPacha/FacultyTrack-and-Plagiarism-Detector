   <?php 
    if(isset($_POST['submit'])){ 
        $data_missing = array(); 
         
        if(empty($_POST['student_id'])){            // Adds name to array 
            $data_missing[] = 'Student ID'; 
        } else{ 
            // Trim white space from the name and store the name 
            $student_id = trim($_POST['student_id']); 
        } 
        if(empty($_POST['activity_id'])){            // Adds name to array 
            $data_missing[] = 'Activity_id'; 
        } else { 
            // Trim white space from the name and store the name 
            $activity_id = trim($_POST['activity_id']); 
        } 
        
        if(empty($_POST['grade'])){              // Adds name to array 
            $data_missing[] = 'Grade'; 
        } else { 
            // Trim white space from the name and store the name 
            $grade = trim($_POST['grade']); 
        } 
        
        if(empty($data_missing)){           
            require_once('mysqli_connect.php'); 
            $query = "INSERT INTO grade_book (student_id, activity_id, grade) VALUES ('$student_id', '$activity_id', '$grade' )"; 
            
            $stmt = mysqli_prepare($myconn, $query); 
 
            mysqli_stmt_execute($stmt); 
            $affected_rows = mysqli_stmt_affected_rows($stmt);              
            if($affected_rows == 1){                
                echo 'Grade Entered';                 
                mysqli_stmt_close($stmt);               
                mysqli_close($myconn); 
            } else {                
                echo 'Error Occurred <br />';               
                echo mysqli_error($myconn);                 
                mysqli_stmt_close($stmt); 
                mysqli_close($myconn); 
            } 
        } else { 
            echo 'You need to enter the following data<br />';              
            foreach($data_missing as $missing){ 
                echo "$missing<br />"; 
        } 
    } 
} 
?>   
<!DOCTYPE html>
<html> 
<head>
<style>
body {background-color: lightgray;}
</style> 
    <title>Add Grade</title>  
</head> 
<body> 
    <center> 
<form action="#" method="POST">     
        <h1 style="color:blue;font-size: 35;">Add a new Student to Grade Book</i> </h1>    
        <p >Student ID: 
	 	<input type="text" name="student_id" size="50" value="" /> 
	 	</p> 
	 	<p>Activity ID: 
	 	<input type="text" name="activity_id" size="50" value="" /> 
 	    </p>  	 	
        <p>Grade: 
 	 	<input type="double" name="grade" size="30" value="" /> 
 	 	</p>  
 	 	 
 	 	    <input type="submit" name="submit" value="Add Grade" /> 
 	 	</p> 
 	</form> 

<form method = "POST" action ="grade_book.php"> 
	 	<input type = "submit" value="Go back to Grade Book menu"/> 
</form> 
</center>
</body>
</html>

