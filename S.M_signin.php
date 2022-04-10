<?php
//connecting with database

require_once('DBconnect.php');

//check input form

if(isset($_POST['fname']) && isset ($_POST['pass'])){
	
	// query to check username password
	
	$u = $_POST['fname'];
	$p = $_POST['pass'];
	$sql = "select * from userdetails where username = '$u' and password = '$p'";
	
	// query execute
	
	$res = mysqli_query($conn, $sql);
	
	
	//check return set
	if( mysqli_num_rows($res)!=0){
		echo "All okay enter";
	header("Location: J_details.php");	
}
else{
	echo "Incorect";
	
	header ("Location: S.M_usersignup.php");
}

	
}


?>