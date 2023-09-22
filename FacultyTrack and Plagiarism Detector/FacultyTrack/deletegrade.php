<?php 
// Get a connection for the database 
require_once('mysqli_connect.php'); 
 
 
// If the query executed properly proceed 
if($_GET['id'])
{
	$id=$_GET['id'];

	// Create a query for the database 
	$query = "DELETE FROM grade_book WHERE id ='$id' ";

	// Get a response from the database by sending the connection 
	// and the query 
	$response = @mysqli_query($myconn, $query);

	if($response){
		header("location:getgradesinfo.php");
	}
}