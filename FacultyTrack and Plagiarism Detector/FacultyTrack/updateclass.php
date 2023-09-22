<?php 
// Get a connection for the database 
require_once('mysqli_connect.php'); 
 
 
// If the query executed properly proceed 
if($_GET['class_id'])
{
	$class_id=$_GET['class_id'];

	// Create a query for the database 
	$query = "SELECT * FROM class WHERE class_id ='$class_id' ";

	// Get a response from the database by sending the connection 
	// and the query 
	$response = @mysqli_query($myconn, $query);

	$row= mysqli_fetch_array($response);

	if(isset($_POST['update']))
	{
		$class_name=$_POST['class_name'];
		$instructor=$_POST['instructor'];
		$class_id=$_POST['class_id'];
		$location=$_POST['location'];
		$class_time=$_POST['class_time'];
		

		$query="UPDATE class SET class_name='$class_name',instructor='$instructor', class_id='$class_id',location='$location',class_time='$class_time' WHERE class_id='$class_id'";

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

	<h1 style="color:blue;font-size: 35;"><i> UPDATE CLASS INFORMATION </i></h1>

	<div>

		<form action="#" method="POST">
			<div>
				<label> Class Name</label>
				<input type="text" name="class_name" value="<?php echo "{$row['class_name']}"; ?>">
			</div>
			<div>
				<label> Instructor</label>
				<input type="text" name="instructor" value="<?php echo "{$row['instructor']}"; ?>">
			</div>
			<div>
				<label> Class ID</label>
				<input type="text" name="class_id"value="<?php echo "{$row['class_id']}"; ?>">
			</div>
			<div>
				<label> Location</label>
				<input type="text" name="location"value="<?php echo "{$row['location']}"; ?>">
			</div>
			<div>
				<label> Class Time</label>
				<input type="text" name="class_time"value="<?php echo "{$row['class_time']}"; ?>">
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
<form method = "POST" action ="getclassinfo.php"> 
 	 	<input type = "submit" value="Go back to class information menu"/> 
 	</form>
 	</center>
</html>