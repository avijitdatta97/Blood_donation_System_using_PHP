<?php

session_start();

require_once("connect.php");

if(isset($_REQUEST["phone"]) && isset($_REQUEST["address"]) && isset($_REQUEST["lastdate"]))
	{
		
		$uphone = $_REQUEST["phone"];
		$uaddress = $_REQUEST["address"];
		$ulastdate = $_REQUEST["lastdate"];
		
		$name = $_SESSION['username'];
		if($name == "")
		{
			echo"<script>
			alert('Log In Your Account..!');
			window.location = 'log_in.php';
			</script>";
		}
		else
		{
			$s1 = "UPDATE signinaccount SET phone = '$uphone', address = '$uaddress', lastdate = '$ulastdate' WHERE email = '$name';";
			$result1 = mysqli_query($connect,$s1);
			
			if($result1 == true)
			{
			header('location:prof.php');
			
			}
			else
			{
				echo"<script>
				alert('Plzzz try Again..!');
				window.location = 'upadte.php';
				</script>";
			}
		}
		
			
	}
	else{
		echo"<script>
				alert('Plzzz Reload the Page..!');
				window.location = 'prof.php';
				</script>";
	}
?>