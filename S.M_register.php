<?php
//connecting with database

require_once('DBconnect.php');

//check input form

if(isset($_POST['fname']) && isset ($_POST['mail']) && isset ($_POST['adress']) && isset ($_POST['phone']) && isset ($_POST['pass'])){
	
	// query to check username password
	
	$u = $_POST['fname'];
	$m = $_POST['mail'];
	$a = $_POST['adress'];
	$n = $_POST['phone'];
	$p = $_POST['pass'];
	
	$sql = "INSERT INTO userdetails VALUES( '$u', '$m', '$a', '$n', '$p')";

	
	// query execute
	
	$res = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn)){
	
		echo "Order Placed Successfully";
		header("Location: index.php");
	}
	else{
		echo "Insertion Failed";
		header("Location: index.php");
	}

	
}


?>