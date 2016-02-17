<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
<title>Student details</title>
<meta name="title" content=" Student Registration Form "/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>

<link href="css/style_demo.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script language="javascript">
$(document).ready(function(){

$(".refresh").click(function () {
    $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
    
});


 $('#register').submit(function() {
   
 if($('#password').val() != $('#cpassword').val()){
 	alert("Please re-enter confirm password");
 	$('#cpassword').val('');
 	$('#cpassword').focus();
 	return false;
 }
	$.post("submit_demo_captcha.php?"+$("#register").serialize(), { }, function(response){
        if(response==1){
           $(".imgcaptcha").attr("src","demo_captcha.php?_="+((new Date()).getTime()));
           clear_form();
           alert("Data Submitted Successfully.")
        }else{
           alert("wrong captcha code!");
        }
	});
	return false;
    });


     function clear_form()
     {
        $("#fname").val('');
		$("#mname").val('');
        $("#lname").val('');
        $("#email").val('');
        $("#phone").val('');
        $("#rank").val('');
        $("#yoa").val('');
		$("#ad").val('');
		$("#cc").val('');
		$("#income").val('');
		$("#usn").val('');
		$("#branch").val('');
		$("#dob").val('');
		$("#bg").val('');
        $("#username").val('');
        $("#password").val('');
        $("#cpassword").val('');
		$("#captcha").val('');
     }


});

</script>

</head>
<body style="background-image: url(rv.jpg);"  style="background-repeat: no-repeat;">

<form action="studentEntry.php" method="post" >
<div id="bodyfull">
<div id="bodyfull2">
	<div id="center">

		<div class="inner_right_demo"><br><br>
		<h1>Student details</h1>
			<div class="form_box">
				<div>
					<label>First Name</label>
					<input type="text" placeholder="Enter Your First Name" id="fname" name="fname" required="required">
				</div>
				
				<div>
					<label>Middle Name</label>
					<input type="text" placeholder="Enter Your Middle Name" id="mname" name="mname" required="required">
				</div>
				
				<div>
					<label>Last Name</label>
					<input type="text" placeholder="Enter Your Last Name" id="lname" name="lname" required="required">
				</div>
				
				<div>
					<label>EmailID</label>
					<input type="email" placeholder="Enter Your Email Address" id="email" name="email" required="required">
				</div>
				
				<div>
					<label>Phone</label>
					<input type="text" placeholder="Enter Your Phone Number" id="phone" name="phone">
				</div>
				
				<div>
					<labelradio>Gender</labelradio>
					<div class="otherinputs">
					<input type="radio" value="Male" checked name="gender"> <span>Male</span> 
					<input type="radio" value="Female" name="gender"> <span>Female</span>					</div>
				</div>
				
				<div>
					<labelradio>Admission</labelradio>
					<div class="otherinputs">
					<input type="radio" value="CET" checked name="noa"> <span>CET</span> 
					<input type="radio" value="COMED-K" name="noa"> <span>COMED-K</span> 
					<input type="radio" value="MANAGEMENT" name="noa"> <span>MANAGEMENT</span> 
					</div>
				</div>
				
				<div>
					<label>CET/COMED-K Rank</label>
					<input type="text" placeholder="Enter Your Rank" id="rank" name="rank">
				</div>
				
				<div>
					<label>Year of Admission</label>
					<input type="text" placeholder="Enter Your Year of Admission" id="yoa" name="yoa">
				</div>
				
				<div>
					<label>Admission Number</label>
					<input type="text" placeholder="Enter Your Admission Number" id="ad" name="ad">
				</div>
				
				<div>
					<label>Caste Category</label>
					<input type="text" placeholder="Enter Your Caste Category" id="cc" name="cc">
				</div>
				
				
				<div>
					<label>Income</label>
					<input type="text" placeholder="Enter Your Income" id="income" name="income">
				</div>
				
				<div>
					<label>USN</label>
					<input type="text" placeholder="Enter Your USN" id="usn" name="usn">
				</div>
				
				<div>
					<label>BRANCH</label>
					<input type="text" placeholder="Enter Your Branch" id="branch" name="branch">
				</div>
				
				<div>
					<labelradio>Resedential Status</labelradio>
					<div class="otherinputs">
					<input type="radio" value="Residing in Hostel" checked name="rs"> <span>Residing in Hostel</span> 
					<input type="radio" value="Day Scholar" name="rs"> <span>Day Scholar</span>
					<input type="radio" value="Private Hostel/PG" name="rs"> <span>PG</span> </div>
				</div>
				
				
				<div>
					<labelradio>Willing to join NCC</labelradio>
					<div class="otherinputs">
					<input type="radio" value="yes" checked name="ncc"> <span>YES</span> 
					<input type="radio" value="no" name="ncc"> <span>NO</span> </div>
				</div>
				
				
				<div>
					<label>Date of Birth</label>
					<input type="date"  placeholder="Enter Your Date of Birth" id="dob" name="dob" required="required">
				</div>
				
				<div>
					<label>Blood Group</label>
					<input type="text"  placeholder="Enter Your Blood Group" id="bg" name="bg" required="required">
				</div>
				
				
				
				<div>
					<label>&nbsp;</label>
					<div class="otherinputs" ><input type="submit" value="Submit" name="B1" class="submit"> &nbsp; &nbsp;<input type="reset" value="Reset" name="B2" class="submit"></div>
				</div>
				
				
					
				
				
			</div>
			
		</div>

</div>	
</div>
</div>

</form>
</body>

</html>
