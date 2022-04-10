<?php
//connecting with database

require_once('DBconnect.php');

//check input form

if(isset($_POST['aname']) && isset ($_POST['apass'])){
	
	// query to check username password
	
	$e = $_POST['aname'];
	$f = $_POST['apass'];
	$sql = "select * from admin where username = '$e' and password = '$f'";
	
	// query execute
	
	$res = mysqli_query($conn, $sql);
	
	
	//check return set
	if( mysqli_num_rows($res)!=0){
		echo "All okay enter";
	header("Location: M_insert_update_delate_search.php");	
}
else{
	echo "Incorect";
	
	header ("Location: index.php");
}

	
}


?>