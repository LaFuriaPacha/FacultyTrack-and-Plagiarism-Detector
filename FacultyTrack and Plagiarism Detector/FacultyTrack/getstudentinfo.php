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
$query = "SELECT * FROM student"; 
// Get a response from the database by sending the connection 
// and the query 
$response = @mysqli_query($myconn, $query); 
// If the query executed properly proceed 
?>

<body> 
	<center>
 <div class="content">	
	<h1 style="color:blue;font-size: 35;"><i>STUDENT INFORMATION</i> </h1>
	<table align="center" cellspacing="5" cellpadding="8"> 
<tr> 
	<th align="center"><b>First Name</b></th> 
	<th align="center"><b>Last Name</b></th> 
	<th align="center"><b>Email</b></th> 	
	<th align="center"><b>Street</b></th> 
	<th align="center"><b>City</b></th> 
	<th align="center"><b>State</b></th> 
	<th align="center"><b>Zip</b></th>  
	<th align="center"><b>Sex</b></th> 
	<th align="center"><b>Student ID</b></th> 
	<th align="center"><b>Class ID</b></th>
	<th align="center"><b> Delete </b></th> 
	<th align="center"><b> Update </b></th>
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
		<?php echo "{$row['email']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['street']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['city']}"; ?>
	<td align="center"> 
		<?php echo "{$row['state']}"; ?></td>
	<td align="center"> 
		<?php echo "{$row['zip']}"; ?></td>
	<td align="center">  
		<?php echo "{$row['sex']}"; ?></td>
	<td align="center"> 
		<?php echo "{$row['student_id']}"; ?></td>
	<td align="center">
		<?php echo "{$row['class_id']}"; ?></td>
	<td align="center">
		<?php echo "<a onClick=\" javascript:return confirm('Are you sure to delete? ');\" href='deletestudent.php?student_id={$row['student_id']}'>Delete</a>"; ?></td>
	<td align="center">
		<?php echo "<a href='updatestudent.php?student_id={$row['student_id']}'> Update </a>"; ?></td>	
</tr>
<?php
}
?>
</table>
 	<form method = "POST" action ="student.php"> 
 	 	<input type = "submit" value="Go back to student menu"/> 
 	</form> 
 </center>
 </div> 
</body> 
</html> 