<?php 
// Get a connection for the database 
require_once('mysqli_connect.php'); 
 
 
// If the query executed properly proceed 
if($_GET['student_id'])
{
	$student_id=$_GET['student_id'];

	// Create a query for the database 
	$query = "SELECT * FROM student WHERE student_id ='$student_id' ";

	// Get a response from the database by sending the connection 
	// and the query 
	$response = @mysqli_query($myconn, $query);

	$row= mysqli_fetch_array($response);

	if(isset($_POST['update']))
	{
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$street=$_POST['street'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zip=$_POST['zip'];
		$sex=$_POST['sex'];
		$student_id=$_POST['student_id'];
		$class_id=$_POST['class_id'];

		$query="UPDATE student SET first_name='$first_name',last_name='$last_name',email='$email',street='$street',city='$city', state='$state', zip='$zip', sex='$sex', student_id='$student_id', class_id='$class_id' WHERE student_id='$student_id'";

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
	<title> Student Data</title>
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
	<h1 style="color:blue;font-size: 35;"><i> UPDATE STUDENT INFORMATION </i></h1>

	<div>

		<form action="#" method="POST">
			<div>
				<label> First Name</label>
				<input type="text" name="first_name" value="<?php echo "{$row['first_name']}"; ?>">
			</div>
			<div>
				<label> Last Name</label>
				<input type="text" name="last_name" value="<?php echo "{$row['last_name']}"; ?>">
			</div>
			<div>
				<label> Email</label>
				<input type="email" name="email"value="<?php echo "{$row['email']}"; ?>">
			</div>
			<div>
				<label> Street</label>
				<input type="text" name="street"value="<?php echo "{$row['street']}"; ?>">
			</div>
			<div>
				<label> City</label>
				<input type="text" name="city"value="<?php echo "{$row['city']}"; ?>">
			</div>
			<div>
				<label> State</label>
				<input type="text" name="state"value="<?php echo "{$row['state']}"; ?>">
			</div>
			<div>
				<label> Zip</label>
				<input type="text" name="zip"value="<?php echo "{$row['zip']}"; ?>">
			</div>
			<div>
				<label> Sex</label>
				<input type="text" name="sex"value="<?php echo "{$row['sex']}"; ?>">
			</div>
			<div>
				<label> Student ID</label>
				<input type="text" name="student_id"value="<?php echo "{$row['student_id']}"; ?>">
			</div>
			<div>
				<label> Class ID</label>
				<input type="text" name="class_id"value="<?php echo "{$row['class_id']}"; ?>">
			</div>
			<br>
			<div>
				<label> </label>
				<input type="submit" name="update" value="Update Student">
			</div>
		</form>	
		
	</div>

</body>

<br>
<br>
<form method = "POST" action ="getstudentinfo.php"> 
 	 	<input type = "submit" value="Go back to student information menu"/> 
 	</form>
 	</center>
</html>