<?php

session_start();

require_once("connect.php");

if(isset($_REQUEST["firstname"]) && isset($_REQUEST["surname"]) && isset($_REQUEST["blood_group"]) && isset($_REQUEST["email"]) && isset($_REQUEST["phone"]) && isset($_REQUEST["pass"]) && isset($_REQUEST["con_pass"]) && isset($_REQUEST["calendar"]) && isset($_REQUEST["address"])){
	
	$sfirstname = $_REQUEST["firstname"];
	$ssurname = $_REQUEST["surname"];
	$sblood_group = $_REQUEST["blood_group"];
	$semail = $_REQUEST["email"];
	$sphone = $_REQUEST["phone"];
	$spass = $_REQUEST["pass"];
	$scon_pass = $_REQUEST["con_pass"];
	$scalendar = $_REQUEST["calendar"];
	$saddress = $_REQUEST["address"];
	
	
	$s = "select * from signinaccount where email='$semail'";
	$result = mysqli_query($connect,$s);
	$num = mysqli_num_rows($result);
	
	if($num == 1){
		echo"<script>
			alert('This Email Already Use..!');
			window.location = 'sign_up.php';
		</script>";
		
	}
	else
	{
		$squ="INSERT INTO signinaccount(fname,sname,bgroup,email,phone,pass,conpass,bdate,address) VALUES ('$sfirstname','$ssurname','$sblood_group','$semail','$sphone','$spass','$scon_pass','$scalendar','$saddress')";
		
		$srunQuery = mysqli_query($connect,$squ);
		
		if($srunQuery == true){
			header('location:log_in.php');
			
		}
		else{
			echo "Data Not Inserted!!";
		}
	}

	
}

else{
	echo "INSERT data first!!";
}



?>