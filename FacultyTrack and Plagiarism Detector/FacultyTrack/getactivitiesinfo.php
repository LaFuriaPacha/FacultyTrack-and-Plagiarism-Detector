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
$query = "SELECT * FROM activities"; 
// Get a response from the database by sending the connection 
// and the query 
$response = @mysqli_query($myconn, $query); 
// If the query executed properly proceed 
?>

<body> 
	<center>
 <div class="content">	
	<h1 style="color:blue;font-size: 35;"><i>ACTIVITIES INFORMATION</i> </h1>
	<table align="center" cellspacing="5" cellpadding="8"> 
<tr> 
	<th align="center"><b>Activity ID</b></th> 
	<th align="center"><b>Activity Name</b></th> 
	<th align="center"><b>Class ID</b></th> 	
	<th align="center"><b>Due Date</b></th> 
	<th align="center"><b>Maximum Points</b></th> 
	<th align="center"><b>Instructions</b></th>
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
		<?php echo "{$row['activity_id']}"; ?>
	</td>
	<td align="center"> 
		<?php echo "{$row['activity_name']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['class_id']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['due_date']}"; ?>
	</td>
	<td align="center">
		<?php echo "{$row['maximum_points']}"; ?>
	<td align="center">
		<?php echo "{$row['instructions']}"; ?>
	<td align="center">
		<?php echo "<a onClick=\" javascript:return confirm('Are you sure to delete? ');\" href='deleteactivity.php?activity_id={$row['activity_id']}'>Delete</a>"; ?></td>
	<td align="center">
		<?php echo "<a href='updateactivity.php?activity_id={$row['activity_id']}'> Update </a>"; ?></td>	
</tr>
<?php
}
?>
</table>
 	<form method = "POST" action ="activities.php"> 
 	 	<input type = "submit" value="Go back to activities menu"/> 
 	</form> 
 </div> 
 </center>
</body> 
</html> 