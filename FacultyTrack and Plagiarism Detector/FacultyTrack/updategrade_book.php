<?php 
// Get a connection for the database 
require_once('mysqli_connect.php'); 
 
 
// If the query executed properly proceed 
if($_GET['id'])
{
	$id=$_GET['id'];

	// Create a query for the database 
	$query = "SELECT grade FROM grade_book WHERE id ='$id' ";

	// Get a response from the database by sending the connection 
	// and the query 
	$response = @mysqli_query($myconn, $query);

	$row= mysqli_fetch_array($response);

	if(isset($_POST['update']))
	{
		
		$grade=$_POST['grade'];
		
		
		$query="UPDATE grade_book SET grade='$grade'WHERE id='$id'";

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
	<title> Update Grades </title>
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

	<h1 style="color:blue;font-size: 35;"><i> UPDATE GRADES  </i></h1>

	<div>

		<form action="#" method="POST">
			<!-- <div>
				<label> Student ID</label>
				<input type="text" name="student_id" value="<?php echo "{$row['student_id']}"; ?>">
			</div>
			<div>
				<label> Activity ID</label>
				<input type="text" name="activity_id" value="<?php echo "{$row['activity_id']}"; ?>">
			</div>
			<div> -->
				<label> Grade</label>
				<input type="double" name="grade"value=""<?php echo "{$row['grade']}"; ?>">
			</div>
			<!-- <div>
				<label> ID</label>
				<input type="text" name="id"value="<?php echo "{$row['id']}"; ?>">
			</div> -->
			<br>
			<div>
				<label> </label>
				<input type="submit" name="update" value="Update Grade">
			</div>
		</form>	
		
	</div>
	
</body>
<br>
<br>
<form method = "POST" action ="getgradesinfo.php"> 
 	 	<input type = "submit" value="Go back to activities information menu"/> 
 	</form>
 	</center>
</html>