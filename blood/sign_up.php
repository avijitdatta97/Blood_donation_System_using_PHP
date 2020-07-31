<?php
	session_start();
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> sign_up </title>
	
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
        
               <script type="text/javascript">
            
            function validationsignup(){
                
                var firstname = document.signupform.firstname.value;
                var Surname = document.signupform.surname.value;
                var bloodgroup = document.signupform.blood_group.value;
                var Email = document.signupform.email.value;
                var Phone = document.signupform.phone.value;
                var Pass = document.signupform.pass.value;
                var Con_pass = document.signupform.con_pass.value;
                var Calendar = document.signupform.calendar.value;
                var address = document.signupform.address.value;
                
                if(firstname == ""){
                    alert("Please Enter First Name.");
                    document.signupform.firstname.focus();
                    return false;
                }
                else if(Surname == ""){
                    alert("Please Enter Surname.");
                    document.signupform.surname.focus();
                    return false;
                }
                else if(bloodgroup == ""){
                    alert("Please Enter Blood Group.");
                    document.signupform.blood_group.focus();
                    return false;
                }
                else if(Email == ""){
                    alert("Please Enter Email.");
                    document.signupform.email.focus();
                    return false;
                }
                else if(Phone == ""){
                    alert("Please Enter Phone.");
                    document.signupform.phone.focus();
                    return false;
                }
                else if(Pass == ""){
                    alert("Please Enter Password.");
                    document.signupform.pass.focus();
                    return false;
                }
                else if(Con_pass == ""){
                    alert("Please Enter Confirm Password.");
                    document.signupform.con_pass.focus();
                    return false;
                }
                else if(Pass != Con_pass){
                    alert("You password & Confirm password are not same.");
                    document.signupform.conpass.focus();
                    return false;
                }
                else if(Calendar == ""){
                    alert("Please Enter Date of Birth.");
                    document.signupform.calendar.focus();
                    return false;
                }
                
                else if(addresss == ""){
                    alert("Please Enter Your Address.");
                    document.signupform.address.focus();
                    return false;
                }
                
                function validation(){

                var bloodgroup = document.requestform.blood_group.value;
                var Email = document.requestform.email.value;
                var Phone = document.requestform.phnNum.value;
                var address= document.requestform.HAddress.value;
                
                if(bloodgroup == ""){
                    alert("Please Enter Blood Group");
                    document.requestform.blood_group.focus();
                    return false;
                }
                else if(Email == ""){
                    alert("Please Enter Email");
                    document.requestform.email.focus();
                    return false;
                }
                else if(Phone == ""){
                    alert("Please Enter Phone");
                    document.requestform.phone.focus();
                    return false;
                }
                else if(address == ""){
                    alert("Please Enter Address");
                    document.requestform.HAddress.focus();
                    return false;
                }
                else if(address != "" && bloodgroup == "" && Email == "" && Phone == ""){
                    alert("You miss any one input");
                    document.requestform.HAddress.focus();
                    return false;
                }
                
            }
            
            
            function validation1(){
                
                var search = document.searchform.search.value;
                
                if(search != "A+" && search != "A-" && search != "B+" && search != "B-" && search != "AB+" && search != "AB-" && search != "O+" && search != "O-" &&
                   search != "a+" && search != "a-" && search != "b+" && search != "b-" && search != "ab+" && search != "ab-" && search != "o+" && search != "o-"){
                    alert("Please Enter Blood Group");
                    document.searchform.search.focus();
                    return false;
                }
            }
                
            }
            
        </script>
	
</head>
<body>
		
		
		<!--Header part-->
	
	<div class="headerpart">
	
		 <div class="container">
		 
		 <div class="headerleftpart">
				<p><img src="Image/drop.png" alt="blood drop" /> <strong> Blood for Life </strong></p>
				
		 </div>
		 
		 <div class="headerrightpart">
				
			<form name="searchform"  action="search.php" method="post">
                            <input type="hidden" name="searchpage" value="search">
                            <input  id="a1" type="text" name="search" placeholder="Search for Blood.."/>
                            <button  id="a2" onclick="return validation1();" value="searchbutton"> Search  </button>
                            
                   </form>	
		 </div>
		 </div>
	</div>
	
	
	
	<!--Menuber-->
	
	<div class="menubar" >
            <div class="container">

                <div class="menubarpart1"></div>

                <div class="menubarpart2">
                    <ul>
                        <li><a href="index.php">  Home </a></li>
                        <li><a href="about.php"> About</a></li>
						<?php
							
							if(isset($_SESSION['username'])){?>
								<li><a href="prof.php"> Profile </a></li>
								<li><a href="feedback.php"> Feedback </a></li>
								
						<?php }
						else{
							?>
								<li><a href="sign_up.php"> Sign Up </a></li>
								<li><a href="log_in.php"> Log In </a></li>
						<?php
						}
						?>
                        
                        <li><a href="contacts.php"> Contacts </a></li>

                    </ul>
                </div>




                <div class="menubarpart3"></div>

            </div>
        </div>
	

	<!-- Create Profile-->
	
	
	<div class="signup">
		<div class="container">
		
		<div class="signuppart">
		
                    <h1 class="createtext"> Create Your Profile </h1><br><br>

                    <br><br>
			
            <form name="signupform" action="signupprocess.php" method="post">
				                     
							 
				<label for="l1"> <h3> Name </h3></label>
				<input id="l1" type="text" name="firstname" placeholder="First name"/>
				<input id="l1" type="text" name="surname" placeholder="Surname"/>
				
				<label for="l2"><h3>Blood Group</h3></label>
				<select name="blood_group" id="l2">
						<option value=""> Select Blood Group </option>
						<option value="A+"> A+ </option>
						<option value="A-"> A- </option>
						<option value="B+"> B+ </option>
						<option value="B-"> B- </option>
						<option value="AB+"> AB+ </option>
						<option value="AB-"> AB- </option>
						<option value="O+"> O+ </option>
						<option value="O-"> O- </option>
					
					</select>
			
			
			<label for="l3"> <h3> Enter Your Email Address </h3> </label>
			<input id="l3" type="Email" name="email" placeholder="@gmail.com" /><br />
                        
			<label for="l4"><h3>Your Phone Number</h3></label>
			<input id="l4" type="tel" name="phone" placeholder="+880"/><br />
			
			<label for="l5"><h3>Create a Password</h3></label>
			<input id="l5" type="password" name="pass" placeholder="password"/><br />
			
			<label for="l5"><h3> Confirm Your Password </h3></label>
			<input id="l5" type="password" name="con_pass"  placeholder="password"/><br />
			
			<!--<label for="l6"><h3> Gender: </h3></label>
			<input id="l6" type="radio"  name="gender"/>   <strong> Male </strong> <br /> 
			<input id="l6"type="radio"  name="gender"/> <strong> Female </strong>  <br /> -->
			
			
			
			<label for="selectid"><h3> Birthday: </h3></label><br />
                        <input type="date" name="calendar"/> <br />
                        
                        <label for="l6"> <h3> Address </h3> </label>
			<input id="l5" type="text" name="address" placeholder="Present Address" /><br />
			
		
			
                        <button id="submit_button" onClick="return validationsignup();" value="signup" type="submit" > Create Account </button><br /><br /><br /><br />
			</form>
				
				
			</div>
			</div>
		</div>


	
	
	<!--Downber-->

        <div class="downber">
            <div class="container">


                <div class="downberpart1">
                    <h2> Search Blood Donor </h2>

                    <a href="donor_list.php?groupid=1"><input id="sbd" type="button" name="aplus" value="A+"></a> 
                    <a href="donor_list.php?groupid=2"><input id="sbd" type="button" value="A-"></a>  <br />
                    <a href="donor_list.php?groupid=3"><input id="sbd" type="button" value="B+"></a> 
                    <a href="donor_list.php?groupid=4"><input id="sbd" type="button" value="B-"></a> <br />
                    <a href="donor_list.php?groupid=5"><input id="sbd" type="button" value="AB+"></a> 
                    <a href="donor_list.php?groupid=6"><input id="sbd" type="button" value="AB-"></a> <br />
                    <a href="donor_list.php?groupid=7"><input id="sbd" type="button" value="O+"></a> 
                    <a href="donor_list.php?groupid=8"><input id="sbd" type="button" value="O-"></a> 

                </div>

                <div class="downberpart2">
                    <h2>Request List</h2>

                    <center>
                        <table  border="3">
                            <tr style="background-color: blueviolet; color:aliceblue; font-weight: bold;">

                                <th>Blood Group</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Hospital Address</th>

                            </tr>
							
							<?php
					
							require_once("connect.php");
									
							$sr = "select rbloodgroup,remail,rphone,rhaddress from request where id<=5";
							$rr = mysqli_query($connect,$sr);
									
								while($rowr = mysqli_fetch_assoc($rr))
									{ ?>
									
											<tr>
												<td><?php echo $rowr['rbloodgroup']; ?>   </td>
												<td><?php echo $rowr['remail']; ?>  </td>
												<td><?php echo $rowr['rphone']; ?>  </td>
												<td><?php echo $rowr['rhaddress']; ?>  </td>
							
											</tr>
				
							  <?php } ?>
							
							
							
							
                        </table>
                        <br><br><br>
                        <a href="request_list.php"> <button id="r6"type="submit"> See More </button> </a>

                    </center>
                </div>



                <div class="downberpart3">
                    <h2>Request For Blood</h2>



                    <form style="padding-left:50px;" name="requestform" action="requestprocess.php" method="post">
                        <input type="hidden" name="page" value="Share"> 
                        <label for="r1"> <h3> Blood Group </h3></label>

                        <select name="blood_group" id="r1">
                            <option value=""> Select Blood Group </option>
                            <option value="A+"> A+ </option>
                            <option value="A-"> A- </option>
                            <option value="B+"> B+ </option>
                            <option value="B-"> B- </option>
                            <option value="AB+"> AB+ </option>
                            <option value="AB-"> AB- </option>
                            <option value="O+"> O+ </option>
                            <option value="O-"> O- </option>

                        </select>

                        <label for="r2"> <h3> Email </h3> </label>
                        <input id="r2" type="Email" name="email" placeholder="@gmail.com" />

                        <label for="r3"> <h3> Phone Number </h3> </label>
                        <input id="r3" type="tel" name="phnNum" placeholder="+880"/>

                        <label for="r5"> <h3> Hospital Address </h3></label>
                        <input id="r5" type="text" name="HAddress" placeholder="Address" />
                        <br><br><br>

                        <button id="r6" onclick="return validation();" value="request" type="submit"> Share </button>

                    </form>
                </div>

            </div>
        </div>

        <div class="fixedicon clear">
            <a href="https://www.facebook.com"><img src="https://i.imgur.com/b5rgxIf.png" title="source: imgur.com" alt="Facebook"/></a>
            <a href="https://plus.google.com/"><img src="https://i.imgur.com/YcOZUlz.png" title="source: imgur.com"  alt="Google plus"/></a>
            <a href="https://www.instagram.com/?hl=en"><img src="https://i.imgur.com/It3rWle.jpg" title="source: imgur.com"  alt="instagram"/></a>
            <a href="https://www.linkedin.com"><img src="https://i.imgur.com/cJRj1kK.png" title="source: imgur.com"  alt="inkedin"/></a>

        </div>
	
</body>
</html>
			
			

