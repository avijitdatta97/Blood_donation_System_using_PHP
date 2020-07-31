<?php

session_start();

require_once("connect.php");

if(isset($_REQUEST["name"]) && isset($_REQUEST["subject"]) && isset($_REQUEST["message"])){
	
	$fname = $_REQUEST["name"];
	$fsub = $_REQUEST["subject"];
	$fmessage = $_REQUEST["message"];
	
	$femail = $_SESSION['username'];

	$squ="INSERT INTO feedback(email,name,subject,message) VALUES ('$femail','$fname','$fsub','$fmessage')";
		
	$srunQuery = mysqli_query($connect,$squ);
		
	if($srunQuery == true){
		header('location:prof.php');
			
	}
	else{
			echo "Data Not Inserted!!";
		}
	

}

else{
	echo "INSERT data first!!";
}



?>