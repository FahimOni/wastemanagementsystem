<?php
//connecting with database

require_once('DBconnect.php');


// we need to check if the input in the form textfields are not empty
if(isset($_POST['fn'])&& isset($_POST['v'])){
	// write the query to check if this username and password exists in our database
	$a = $_POST['fn'];	
	$c = $_POST['v'];
	
	
	$sql = "DELETE FROM `cars` WHERE $a='$c';";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	         
		//echo "Order Placed Successfully";
		header("Location:M_feedback.php");
	}
	else{
		echo "delationion Failed";
		
	}
	
}


?>