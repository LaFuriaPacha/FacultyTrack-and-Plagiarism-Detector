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
$query = "SELECT grade_book.student_id, grade_book.activity_id, grade_book.grade, grade_book.id, student.first_name, student.last_name FROM grade_book INNER JOIN student ON grade_book.student_id = student.student_id WHERE grade=(SELECT MIN(grade) FROM grade_book) ORDER BY `grade` ASC;"; 
// Get a response from the database by sending the connection 
// and the query 
$response = @mysqli_query($myconn, $query); 
// If the query executed properly proceed 
?>

<body> 
	<center>
 <div class="content">	
	<h1 style="color:blue;font-size: 35;"><i>THE LOWEST GRADES </i> </h1>
	<table align="center" cellspacing="5" cellpadding="8"> 
<tr> 
	
	<th align="center"><b>First Name</b></th> 
	<th align="center"><b>Last Name</b></th>
	<th align="center"><b>Student ID</b></th> 
	<th align="center"><b>Activity ID</b></th> 
	<th align="center"><b>Lowest Grade</b></th> 	
	<th align="center"><b>ID</b></th> 
</tr> 
<?php
// mysqli_fetch_array will return a row of data from the query 
// until no further data is available 
while($row = mysqli_fetch_array($response))
{
?>
<tr>
	
	<td align="center"> 
		<?php echo "{$row['first_name']}"; ?>
	</td>
	<td align="center"> 
		<?php echo "{$row['last_name']}"; ?>
	</td>
	<td align="center"> 
		<?php echo "{$row['student_id']}"; ?>
	</td>
	<td align="center"> 
		<?php echo "{$row['activity_id']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['grade']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['id']}"; ?>
	</td>
</tr>
<?php
}
?>
</table>
 	<form method = "POST" action ="grade_book.php"> 
 	 	<input type = "submit" value="Go back to grade menu"/> 
 	</form> 
 </div> 
 </center>
</body> 
</html> 