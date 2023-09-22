<!DOCTYPE html>
<html> 
<head>
<style>
body {background-color: lightgray;}

</style> 
 	<title>Add Class</title> 
    
</head> 
<body> 
    <center>
    <?php 
    if(isset($_POST['submit'])){ 
        $data_missing = array(); 
         
 
        if(empty($_POST['class_name'])){            // Adds name to array 
            $data_missing[] = 'Class Name'; 
        } else { 
            // Trim white space from the name and store the name 
            $class_name = trim($_POST['class_name']); 
        } 
        if(empty($_POST['instructor'])){            // Adds name to array 
            $data_missing[] = 'Instructor'; 
        } else{ 
            // Trim white space from the name and store the name 
            $instructor = trim($_POST['instructor']); 
        } 
        if(empty($_POST['class_id'])){              // Adds name to array 
            $data_missing[] = 'Class ID'; 
        } else { 
            // Trim white space from the name and store the name 
            $class_id = trim($_POST['class_id']); 
        } 
        if(empty($_POST['location'])){              // Adds name to array 
            $data_missing[] = 'Location'; 
        } else { 
            // Trim white space from the name and store the name 
            $location = trim($_POST['location']); 
        } 
        if(empty($_POST['class_time'])){ 
            // Adds name to array 
        $data_missing[] = 'Class time'; 
        } else { 
        // Trim white space from the name and store the name 
        $class_time = trim($_POST['class_time']); 
        } 
 
        if(empty($data_missing)){           
            require_once('mysqli_connect.php'); 
            $query = "INSERT INTO class (class_name, instructor, class_id, location, class_time) VALUES ('$class_name', '$instructor', '$class_id', '$location', '$class_time')"; 
            
            $stmt = mysqli_prepare($myconn, $query); 
 
            mysqli_stmt_execute($stmt); 
            $affected_rows = mysqli_stmt_affected_rows($stmt);              
            if($affected_rows == 1){                
                echo 'Class Entered';                 
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
<form action="#" method="POST">     
        <h1 style="color:blue;font-size: 35;">Add a new Class</i> </h1>    
        <p >Class Name: 
	 	<input type="text" name="class_name" size="50" value="" /> 
	 	</p> 
	 	<p>Instructor: 
	 	<input type="text" name="instructor" size="50" value="" /> 
 	    </p>  	 	
        <p>Class ID: 
 	 	<input type="text" name="class_id" size="30" value="" /> 
 	 	</p> 
 	 	<p>Location: 
 	 	<input type="text" name="location" size="50" value="" /> 
 	 	</p> 
 	 	<p>Class time: 
 	 	<input type="time" name="class_time" size="30" value="" /> 
 	 	</p> 
 	 	<p> 
 	 	    <input type="submit" name="submit" value="Add Class" /> 
 	 	</p> 
 	</form> 

<form method = "POST" action ="class.php"> 
	 	<input type = "submit" value="Go back to class menu"/> 
</form> 
</center>
</body>
</html>

