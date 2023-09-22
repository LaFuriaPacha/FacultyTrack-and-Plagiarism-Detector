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
$query = "SELECT * FROM class"; 
// Get a response from the database by sending the connection 
// and the query 
$response = @mysqli_query($myconn, $query); 
// If the query executed properly proceed 
?>

<body> 
	<center>
 <div class="content">	
	<h1 style="color:blue;font-size: 35;"><i>CLASS INFORMATION</i> </h1>
	<table align="center" cellspacing="5" cellpadding="8"> 
<tr> 
	<th align="center"><b>Class Name</b></th> 
	<th align="center"><b>Instructor</b></th> 
	<th align="center"><b>Class ID</b></th> 	
	<th align="center"><b>Location</b></th> 
	<th align="center"><b>Class Time</b></th> 
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
		<?php echo "{$row['class_name']}"; ?>
	</td>
	<td align="center"> 
		<?php echo "{$row['instructor']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['class_id']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['location']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['class_time']}"; ?>
	<td align="center">
		<?php echo "<a onClick=\" javascript:return confirm('Are you sure to delete? ');\" href='deleteclass.php?class_id={$row['class_id']}'>Delete</a>"; ?></td>
	<td align="center">
		<?php echo "<a href='updateclass.php?class_id={$row['class_id']}'> Update </a>"; ?></td>	
</tr>
<?php
}
?>
</table>
 	<form method = "POST" action ="class.php"> 
 	 	<input type = "submit" value="Go back to Class menu"/> 
 	</form> 
 </div> 
 </center>
</body> 
</html> 