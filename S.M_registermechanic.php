<?php
//connecting with database

require_once('DBconnect.php');

//check input form

if(isset ($_POST['mname']) && isset ($_POST['mmail']) && isset ($_POST['madress']) && isset ($_POST['mphone']) && isset ($_POST['mpass']) && isset ($_POST['skill'])){
	
	// query to check username password
	
	$v = $_POST['mname'];
	$b = $_POST['mmail'];
	$a = $_POST['madress'];
	$c = $_POST['mphone'];
	$d = $_POST['skill'];
	$q = $_POST['mpass'];
	

	$sql = "INSERT INTO mechanicdetails VALUES( '$v', '$b', '$a', '$c', '$d', '$q')";

	
	// query execute
	
	$res = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn)){
	
		echo "Order Placed Successfully";
		header("Location: S.M_mechaniclogin.php");
	}
	else{
		echo "Insertion Failed";
		header("Location: index.php");
	}

	
}


?>