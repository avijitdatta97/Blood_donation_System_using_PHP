<?php

require_once("connect.php");

if(isset($_REQUEST["blood_group"]) && isset($_REQUEST["email"]) && isset($_REQUEST["phnNum"]) && isset($_REQUEST["HAddress"])){
	
	$rblood_group = $_REQUEST["blood_group"];
	$remail = $_REQUEST["email"];
	$rphnNum = $_REQUEST["phnNum"];
	$rHAddress = $_REQUEST["HAddress"];

	//echo $blood_group;
	//echo $email;
	//echo $phnNum;
	//echo $HAddress;
	if($rphnNum == "")
	{
		echo"<script>
			alert('Enter Phone Number..!');
			window.location = 'index.php';
		</script>";
	}
	else
	{
		$rqu="INSERT INTO REQUEST(rbloodgroup,remail,rphone,rhaddress) VALUES ('$rblood_group','$remail','$rphnNum','$rHAddress')";
		
		$runQuery = mysqli_query($connect,$rqu);
		
		if($runQuery == true){
			header('location:request_list.php');
			
		}
		else{
			echo"<script>
			alert('PLzz Try Again..!');
			window.location = 'index.php';
		</script>";
		}
	}
	
	
}
else{
	echo "INSERT data first!!";
}



?>