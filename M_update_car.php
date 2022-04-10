<?php


require_once('DBconnect.php');



if(isset($_POST['id']) && isset($_POST['wc']) && isset($_POST['nv'])){
	
	$a = $_POST['id'];	
	$b = $_POST['wc'];
	$c = $_POST['nv'];
	
	
	$sql = "update cars set $b='$c' where ID='$a';";
	
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
	         
		
		header("Location:M_feedback.php");
	}
	else{
		echo "update Failed";
		
	}
	
}


?>