<html> 
<head>
<style>
body {background-color: lightgray;}
</style> 
    <title>Add Student</title> 
</head> 
<body> 
<center>
<?php 
 	if(isset($_POST['submit'])){ 
 	 	$data_missing = array(); 
 	 	 
 
 	    if(empty($_POST['first_name'])){  	        // Adds name to array 
 	        $data_missing[] = 'First Name'; 
 	    } else { 
 	        // Trim white space from the name and store the name 
 	        $f_name = trim($_POST['first_name']); 
 	    } 
 	    if(empty($_POST['last_name'])){  	        // Adds name to array 
 	        $data_missing[] = 'Last Name'; 
 	    } else{ 
 	        // Trim white space from the name and store the name 
 	        $l_name = trim($_POST['last_name']); 
 	    } 
 	    if(empty($_POST['email'])){  	        // Adds name to array 
 	        $data_missing[] = 'Email'; 
 	    } else { 
 	        // Trim white space from the name and store the name 
 	        $email = trim($_POST['email']); 
 	    } 
 	    if(empty($_POST['street'])){  	        // Adds name to array 
 	        $data_missing[] = 'Street'; 
 	    } else { 
 	        // Trim white space from the name and store the name 
 	        $street = trim($_POST['street']); 
 	    } 
 	    if(empty($_POST['city'])){ 
 	        // Adds name to array 
        $data_missing[] = 'City'; 
        } else { 
        // Trim white space from the name and store the name 
        $city = trim($_POST['city']); 
        } 
        if(empty($_POST['state'])){         // Adds name to array 
        $data_missing[] = 'State'; 
        } else { 
        // Trim white space from the name and store the name 
        $state = trim($_POST['state']); 
        } 
        if(empty($_POST['zip'])){ 
 	        // Adds name to array 
 	        $data_missing[] = 'Zip Code'; 
 	    } else { 
 	        // Trim white space from the name and store the name 
 	        $zip = trim($_POST['zip']); 
 	    } 
 	    if(empty($_POST['sex'])){  	        // Adds name to array 
 	        $data_missing[] = 'Sex'; 
 	    } else { 
 	        // Trim white space from the name and store the name 
 	        $sex = trim($_POST['sex']); 
 	    }   
	 	if(empty($_POST['student_id'])){ 
        // Adds name to array 
        $data_missing[] = 'Student ID'; 
        } else { 
 	        // Trim white space from the name and store the name 
 	        $student_id = trim($_POST['student_id']); 
 	    } 
        if(empty($_POST['class_id'])){ 
        // Adds name to array 
        $data_missing[] = 'Class ID'; 
        } else { 
            // Trim white space from the name and store the name 
            $class_id = trim($_POST['class_id']); 
        } 
 
 	    if(empty($data_missing)){  	        
            require_once('mysqli_connect.php'); 
 	        $query = "INSERT INTO student (first_name, last_name, email, street, city, state, zip, sex, student_id, class_id) VALUES ('$f_name', 
                                   '$l_name', '$email', '$street', '$city', 
                                   '$state', '$zip', 
                                   '$sex', '$student_id', '$class_id')"; 
 	        
 	        $stmt = mysqli_prepare($myconn, $query); 
 	      
 
 	        mysqli_stmt_execute($stmt); 
 	        $affected_rows = mysqli_stmt_affected_rows($stmt);  	        
            if($affected_rows == 1){  	            
                echo 'Student Entered';  	            
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
        <h1 style="color:blue;font-size: 35;">Add a New Student</i> </h1>    
        <p>First Name: 
	 	<input type="text" name="first_name" size="30" value="" /> 
	 	</p> 
	 	<p>Last Name: 
	 	<input type="text" name="last_name" size="30" value="" /> 
 	    </p>  	 	
        <p>Email: 
 	 	<input type="text" name="email" size="30" value="" /> 
 	 	</p> 
 	 	<p>Street: 
 	 	<input type="text" name="street" size="30" value="" /> 
 	 	</p> 
 	 	<p>City: 
 	 	<input type="text" name="city" size="30" value="" /> 
 	 	</p> 
 	 	<p>State (2 Characters): 
 	 	<input type="text" name="state" size="30" maxlength="2" value="" /> 
 	 	</p> 
 	 	<p>Zip Code: 
 	 	<input type="text" name="zip" size="30" maxlength="5" value="" /> 
 	 	</p> 
 	 	<p>Sex (M or F): 
 	 	<input type="text" name="sex" size="30" maxlength="1" value="" /> 
 	 	</p> 
 	 	<p>Student ID: 
 	 	<input type="text" name="student_id" size="30" value="" /> 
 	 	</p> 
        <p>Class ID: 
        <input type="text" name="class_id" size="30" value="" /> 
        </p> 
 	 	<p> 
 	 	    <input type="submit" name="submit" value="Add Student" /> 
 	 	</p> 
 	</form> 
 
<form method = "POST" action ="student.php"> 
	 	<input type = "submit" value="Go back to student menu"/> 
</form> 
</center>
</body>
</html>
