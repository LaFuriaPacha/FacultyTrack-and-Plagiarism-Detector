   <?php 
    if(isset($_POST['submit'])){ 
        $data_missing = array(); 
         
 
        if(empty($_POST['activity_id'])){            // Adds name to array 
            $data_missing[] = 'activity_id'; 
        } else { 
            // Trim white space from the name and store the name 
            $activity_id = trim($_POST['activity_id']); 
        } 
        if(empty($_POST['activity_name'])){            // Adds name to array 
            $data_missing[] = 'Activity Name'; 
        } else{ 
            // Trim white space from the name and store the name 
            $activity_name = trim($_POST['activity_name']); 
        } 
        if(empty($_POST['class_id'])){              // Adds name to array 
            $data_missing[] = 'Class ID'; 
        } else { 
            // Trim white space from the name and store the name 
            $class_id = trim($_POST['class_id']); 
        } 
        if(empty($_POST['due_date'])){              // Adds name to array 
            $data_missing[] = 'Due Date'; 
        } else { 
            // Trim white space from the name and store the name 
            $due_date = trim($_POST['due_date']); 
        } 
        if(empty($_POST['maximum_points'])){ 
            // Adds name to array 
        $data_missing[] = 'Maximum Points'; 
        } else { 
        // Trim white space from the name and store the name 
        $maximum_points = trim($_POST['maximum_points']); 
        } 
        if(empty($_POST['instructions'])){ 
            // Adds name to array 
        $data_missing[] = 'Instructions'; 
        } else { 
        // Trim white space from the name and store the name 
        $instructions = trim($_POST['instructions']); 
        } 
        if(empty($data_missing)){           
            require_once('mysqli_connect.php'); 
            $query = "INSERT INTO activities (activity_id, activity_name, class_id, due_date, maximum_points, instructions) VALUES ('$activity_id', '$activity_name', '$class_id', '$due_date', '$maximum_points', '$instructions')"; 
            
            $stmt = mysqli_prepare($myconn, $query); 
 
            mysqli_stmt_execute($stmt); 
            $affected_rows = mysqli_stmt_affected_rows($stmt);              
            if($affected_rows == 1){                
                echo 'Activity Entered';                 
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
    <title>Add Activity</title>  
</head> 
<body> 
    <center> 
<form action="#" method="POST">     
        <h1 style="color:blue;font-size: 35;">Add a New Activity</i> </h1>    
        <p >Activity ID: 
	 	<input type="text" name="activity_id" size="50" value="" /> 
	 	</p> 
	 	<p>Activity Name: 
	 	<input type="text" name="activity_name" size="50" value="" /> 
 	    </p>  	 	
        <p>Class ID: 
 	 	<input type="text" name="class_id" size="30" value="" /> 
 	 	</p> 
 	 	<p>Due Date: 
 	 	<input type="text" name="due_date" size="50" value="" /> 
 	 	</p> 
 	 	<p>Maximum Points: 
 	 	<input type="text" name="maximum_points" size="30" value="" /> 
 	 	</p>
        <p>Instructions: 
        <input type="text" name="instructions" size="100" value="" /> 
        </p> 
 	 	<p> 
 	 	    <input type="submit" name="submit" value="Add Activity" /> 
 	 	</p> 
 	</form> 

<form method = "POST" action ="activities.php"> 
	 	<input type = "submit" value="Go back to activities menu"/> 
</form> 
</center>
</body>
</html>

