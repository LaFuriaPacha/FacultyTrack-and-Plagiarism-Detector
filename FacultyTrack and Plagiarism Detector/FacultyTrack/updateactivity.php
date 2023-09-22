<?php 
// Get a connection for the database 
require_once('mysqli_connect.php'); 
 
 
// If the query executed properly proceed 
if($_GET['activity_id'])
{
	$activity_id=$_GET['activity_id'];

	// Create a query for the database 
	$query = "SELECT * FROM activities WHERE activity_id ='$activity_id' ";

	// Get a response from the database by sending the connection 
	// and the query 
	$response = @mysqli_query($myconn, $query);

	$row= mysqli_fetch_array($response);

	if(isset($_POST['update']))
	{
		$activity_id=$_POST['activity_id'];
		$activity_name=$_POST['activity_name'];
		$class_id=$_POST['class_id'];
		$due_date=$_POST['due_date'];
		$maximum_points=$_POST['maximum_points'];
		$instructions=$_POST['instructions'];

		$query="UPDATE activities SET activity_id='$activity_id',activity_name='$activity_name', class_id='$class_id',due_date='$due_date',maximum_points='$maximum_points', instructions='$instructions' WHERE activity_id='$activity_id'";

		$response2 = @mysqli_query($myconn, $query);

		if ($response2) {
			echo "Update success";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Class Data</title>
	<style type="text/css">
		body {background-color: lightgray;}
		label{
				display: inline-block;
				width: 100px;
				text-align: right;
				padding-top: 10px;
				padding-bottom: 10px;

		}

	</style>
		
</head>
<body>
	<center> 

	<h1 style="color:blue;font-size: 35;"><i> UPDATE ACTIVITIES INFORMATION </i></h1>

	<div>

		<form action="#" method="POST">
			<div>
				<label> Activity ID</label>
				<input type="text" name="activity_id" value="<?php echo "{$row['activity_id']}"; ?>">
			</div>
			<div>
				<label> Activity Name</label>
				<input type="text" name="activity_name" value="<?php echo "{$row['activity_name']}"; ?>">
			</div>
			<div>
				<label> Class ID</label>
				<input type="text" name="class_id"value="<?php echo "{$row['class_id']}"; ?>">
			</div>
			<div>
				<label> Due Date</label>
				<input type="date" name="due_date"value="<?php echo "{$row['due_date']}"; ?>">
			</div>
			<div>
				<label> Maximum Points</label>
				<input type="text" name="maximum_points"value="<?php echo "{$row['maximum_points']}"; ?>">
			</div>
			<div>
				<label> Instructions</label>
				<input type="text" name="instructions"value="<?php echo "{$row['instructions']}"; ?>">
			</div>
			
			<br>
			<div>
				<label> </label>
				<input type="submit" name="update" value="Update Class">
			</div>
		</form>	
		
	</div>
	
</body>
<br>
<br>
<form method = "POST" action ="getactivitiesinfo.php"> 
 	 	<input type = "submit" value="Go back to activities information menu"/> 
 	</form>
 	</center>
</html>