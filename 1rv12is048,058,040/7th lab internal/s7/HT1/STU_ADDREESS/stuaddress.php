<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Student Address Details</title>
<meta name="title" content="Student Address  Details"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>

<link href="css/style_demo.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script language="javascript"  type="text/javascript">
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
function onlyNumbers(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;   //if IE
        else
            charCode = evt.which; //if firefox
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

 function onlyAlphabets(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;  //for IE
        else
            charCode = evt.which;  //for firefox
        if (charCode == 32) //for &lt;space&gt; symbol
            return true;
        if (charCode > 31 && charCode < 65) //for characters before 'A' in ASCII Table
            return false;
        if (charCode > 90 && charCode < 97) //for characters between 'Z' and 'a' in ASCII Table
            return false;
        if (charCode > 122) //for characters beyond 'z' in ASCII Table
            return false;
        return true;
    }

}
function isNumberKey(evt){ // Numbers only
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
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
        $("#Dno").val('');
		$("#USN").val('');
        $("#Cross_Num").val('');
		$("#Main").val('');
		$("#Street").val('');
        $("#City").val('');
		$("#District").val('');
		$("#State").val('');
        $("#pin").val('');
		
     }


});

</script>

</head>
<body style="background-image: url(copy-of-burgess-letters.jpg); use oncontextmenu="return false;">
<form method="post" action="stuaddress2.php">
<div id="bodyfull">
<br><br><br><br><br><br><br><br><br><br>
<div id="bodyfull2">
<h1 align="center" color="#DF013A"  >Student Address Details</h1>
	<div id="center">

		<div class="inner_right_demo"> 
		<form name="register" action="#null" method="post" id="register">
			<div class="form_box">
				
				
				<div>
					<label>Door Number</label>
					<input type="number" placeholder=" eg: 121/1 " id="Dno" name="Dno" maxlength="4" size="4" min="1" onkeypress="return onlyNumbers(event);" required="required">
				</div>
				<div>
					<label>Cross Number</label>
					<input type="number" placeholder=" eg: 18 " id="Cross_Num" name="Cross_Num" maxlength="4" min="1" size="4" onkeypress="return onlyNumbers(event);" required="required">
				</div>
				
				<div>
					<label>Main</label>
					<input type="number" placeholder=" eg: 5 " id="Main" name="Main" maxlength="4" min="1" size="4" onkeypress="return onlyNumbers(event);" required="required">
				</div>
				
				<div>
					<label>Street</label>
					<input type="text" placeholder=" eg: Dollars colony " id="Street" name="Street" min="1" maxlength="20" size="20" onkeypress="return onlyNumbers(event);" required="required">
				</div>
				
				<div>
					<label>City</label>
					<input type="text" placeholder=" eg: Bengaluru " id="City" name="City" maxlength="20" size="20"   onkeypress="return onlyAlphabets(event);" required="required">
				</div>
				
				<div>
					<label>District</label>
					<input type="text" placeholder=" eg: Davanagere " id="District" name="District" maxlength="20" size="20"   onkeypress="return onlyAlphabets(event);" required="required">
				</div>
				
				
				<div>
					<label>State</label>
					<input type="text" placeholder=" eg: Karnataka " id="State" name="State" maxlength="20" size="20"   onkeypress="return onlyAlphabets(event);" required="required">
				</div>
				
				<div>
					<label>pin</label>
					<input type="number" placeholder=" eg: 571401 " id="pin" name="pin"  min="100000" max="999999" maxlength="6" pattern=".{6,6}" size="6" onkeypress="return onlyNumbers(event);" required="required">
				</div>
				<div>
							<label>USN</label>
							
							<SELECT name="USN"> <OPTION VALUE=0>Choose
								<?php 
								$servername = "localhost";
								$username = "root";
								$password = "root";
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
				<form name="myForm" action="stuaddress2.php" onsubmit="return validateForm()" method="post">
					<label>&nbsp; &nbsp;</label>
					<div class="otherinputs" ><input type="submit" value="Submit" name="B1" class="submit">&nbsp;<input type="reset" value="Reset" name="B2" class="submit"></div>
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
