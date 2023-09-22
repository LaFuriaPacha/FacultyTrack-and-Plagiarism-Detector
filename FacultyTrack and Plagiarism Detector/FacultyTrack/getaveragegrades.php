<!DOCTYPE html> 
<html> 
<head> 
	<style>
body {background-color: lightgray;}
</style>
 	<meta charset="utf-8"> 
 	
 	<title>Go back to main menu</title> 
</head> 

<?php 
// Get a connection for the database 
require_once('mysqli_connect.php'); 
// Create a query for the database 
$query = "SELECT AVG(grade) AS Average FROM grade_book"; 
// Get a response from the database by sending the connection 
// and the query 
$response = @mysqli_query($myconn, $query); 
// If the query executed properly proceed 
?>

<body> 
	<center>
 <div class="content">	
	<h1 style="color:blue;font-size: 35;"><i>THE AVERAGE GRADE </i> </h1>
	<table align="center" cellspacing="5" cellpadding="8"> 
<tr> 
	
	
	<th align="center"><b>Average Overall Grade</b></th> 	
	 
</tr> 
<?php
// mysqli_fetch_assoc will return average data from the query 
// until no further data is available 
$row = mysqli_fetch_assoc($response)

?>
<tr>
	
	
	<td align="center">
		<?php echo "{$row['Average']}"; ?>
	</td>
	
</tr>
<?php

?>
</table>
 	<form method = "POST" action ="grade_book.php"> 
 	 	<input type = "submit" value="Go back to grade menu"/> 
 	</form> 
 </div> 
 </center>
</body> 
</html> 