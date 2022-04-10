<?php
//connecting with database

require_once('DBconnect.php');


// we need to check if the input in the form textfields are not empty
if(isset($_POST['id']) && isset($_POST['man']) && isset($_POST['pro']) && isset($_POST['mod']) && isset($_POST['clo']) && isset($_POST['pri']) && isset($_POST['fe']) && isset($_POST['ye'])){
	// write the query to check if this username and password exists in our database
	$a = $_POST['id'];	
	$b = $_POST['man'];
	$c = $_POST['pro'];
	$d = $_POST['mod'];
	$e = $_POST['clo'];
	$f = $_POST['pri'];
	$g = $_POST['fe'];
	$h = $_POST['ye'];
	
	$sql = " INSERT INTO cars VALUES( '$a', '$b','$c', '$d', '$e', '$f','$g','$h') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	         
		//echo "Order Placed Successfully";
		header("Location:M_feedback.php");
	}
	else{
		//echo "Insertion Failed";
		//header("Location: order_car.php");
	}
	
}


?>