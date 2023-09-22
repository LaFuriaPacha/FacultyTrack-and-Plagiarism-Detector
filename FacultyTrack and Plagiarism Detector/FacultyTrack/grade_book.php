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
    <h2 style="color:blue;font-size: 35;">Grades Information</i> </h2>    
         <p style="color:black;font-size:20px;">Menu</p> 
 
 
 	<form method = "POST" action ="addgrade.php"> 
 	 	<input type = "submit" value="Add Grades "/> 
 	</form> 
 
 	<br> 
 	<br> 
 	<form method = "POST" action ="getgradesinfo.php"> 
 	 	<input type = "submit" value="Display Grades Information"/> 
 	</form>
    <br> 
    <br> 
    <form method = "POST" action ="getmissingassignments.php"> 
        <input type = "submit" value="Display Who has Missing Assignments "/> 
    </form>
    <br> 
    <br>  
    <form method = "POST" action ="gethighestgrades.php"> 
        <input type = "submit" value="Display Who has the Highest Grade "/> 
    </form>
    <br> 
    <br> 
    <form method = "POST" action ="getlowestgrades.php"> 
        <input type = "submit" value="Display Who has the Lowest Grade "/> 
    </form>
    <br> 
    <br> 
    <form method = "POST" action ="getaveragegrades.php"> 
        <input type = "submit" value="Display Average Grade "/> 
    </form>
    <br> 
    <br>
    <form method = "POST" action ="main_index.php"> 
        <input type = "submit" value="Go back to main menu"/> 
    </form>

    </center>
</body> 
</html> 