<!DOCTYPE html> 
<html> 
<head> 
<style>
body {background-color: lightgray;}
</style>
 	<meta charset="utf-8"> 
 	<title>Advanced Database Systems - SEMO</title> 
</head> 
<body> 
 <center>
    <h1 style="color:red;font-size:50px;"><i>Faculty Track</i></h1>  
    <h2 style="color:blue;font-size: 35;">Students Information</i> </h2>    
         <p style="color:black;font-size:20px;">Menu</p> 
 
 
 	<form method = "POST" action ="addstudent.php"> 
 	 	<input type = "submit" value="Add Student Information"/> 
 	</form> 
 
 	<br> 
 	<br> 
 	<form method = "POST" action ="getstudentinfo.php"> 
 	 	<input type = "submit" value="Display Student Information"/> 
 	</form>
    
    <br> 
    <br> 
    
    <form method = "POST" action ="main_index.php"> 
        <input type = "submit" value="Go back to main menu"/> 
    </form>

    </center>
</body> 
</html> 