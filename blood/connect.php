<?php
	$host = "localhost:3307";
	$dbUser = "avijit";
	$dbPwd = "avijit@12345";
	$dbName = "blood_donation";
	
	$connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);
	
	if($connect == false ){
		echo "DataBase Not Connected!!";
	}

?>