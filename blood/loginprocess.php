<?php

session_start();

require_once("connect.php");

if(isset($_REQUEST["email"]) && isset($_REQUEST["pass"]))
	{
		
		$lemail = $_REQUEST["email"];
		$lpassword = $_REQUEST["pass"];
		

		$s1 = "select * from signinaccount where email='$lemail' && pass='$lpassword'";
		$result1 = mysqli_query($connect,$s1);
		$num1 = mysqli_num_rows($result1);
		
		if($num1 == 1){
			$_SESSION['username'] = $lemail;
			header('location:prof.php');
		}
		else
		{
			header('location:prof.php');
			
		}	
	}
	else{
		echo "INSERT data first!!";
	}
?>