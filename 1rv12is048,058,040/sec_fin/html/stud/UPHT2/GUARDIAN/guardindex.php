<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>GUARDIAN DETAILS</title>
<meta name="title" content="GUARDIAN DETAILS"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>

<link href="css/style_demo.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script language="javascript">



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

var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}


 function onlyAlphabets() {

  var regex = /^[a-zA-Z]*$/;
  if (regex.test(document.f.nm.value)) {

      //document.getElementById("notification").innerHTML = "Watching.. Everything is Alphabet now";
      return true;
  } else {
      document.getElementById("notification").innerHTML = "Alphabets Only";
      return false;
  }

}
function isNumberKey(evt){ // Numbers only
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
function clear_form()
     {
        $("#gname").val('');
        $("#relation").val('');
        $("#email").val('');
        $("#phone").val('');
        $("#USN").val('');
       }


});

</script>

</head>
<body use oncontextmenu="return false;">
<div id="bodyfull">
<br><br><br><br><br><br><br><br><br><br>
<div id="bodyfull2">
<h1 align="center" color="FF0000">Guardian Details</h1>
	<div id="center">

		<div class="inner_right_demo"> 
		<form name="register" action="glogin.php" method="post" id="register">
			<div class="form_box">
				<div>
					<label>Guardian Name</label>
					<input type="text" placeholder="  eg : Kumar  " id="gname" name="gname" required="required">
				</div>
				
				<div>
					<label>Relation with Guardian</label>
					<input type="text" placeholder="  eg: Uncle  " id="relation" name="relation" required="required">
				</div>
				
				<div>
					<label>Guardian Email</label>
					<input type="email" placeholder=" example@abc.com  " id="email" name="email" required="required">
				</div>
				
				<div>
					<label>Guardian Mobile Number</label>
					<input type="number" placeholder="  eg:9738749877  " onkeypress=" return isNumberKey(event); " min="1000000000" max="9999999999" id="phone" name="phone">
				</div>
				
				 <div>
							<label>USN <div name="star"> </div></label>
						
							<SELECT name="USN"> <OPTION VALUE=0>Choose
								<?php 
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "student_expertize";
									// Create conection
								 $con = new mysqli($servername, $username, $password, $dbname);
								 $result = mysqli_query($con,"SELECT USN FROM student");
								 while($row = mysqli_fetch_array($result))
								 {
								  $uSN=$row["USN"];
								  echo '<OPTION VALUE=\'' . $uSN . '\'>'.$uSN.'</OPTION>';
								  }
								  mysqli_close ($con); //stranger conection till DB system;
								 ?>
							   </select>
							   </div>
							   
				
				
				
				<div>
				<form name="myForm" action="login.php" onsubmit="return validateForm()" method="post">
					<label>&nbsp; &nbsp; &nbsp;</label><br><br><br><br><br><br><br><br>
					<div class="otherinputs" ><input type="submit" value="Submit" name="B1" class="submit">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="reset" value="Reset" name="B2" class="submit"></div>
				</form>
				</div>
				
				
					
				
				
			</div>
			</form>
		</div>

</div>	
</div>
</div>
</body>

</html>