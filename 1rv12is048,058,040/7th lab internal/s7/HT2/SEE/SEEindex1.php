<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>SEE Details</title>
<meta name="title" content="SEE Details"/>
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
        $("#cname").val('');
		$("#cid").val('');
        $("#credits").val('');
     }


});


function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}

 function sum() {
       var txtFirstNumberValue = document.getElementById('gra').value;
       if (txtFirstNumberValue == "S")
           txtFirstNumberValue = 10;
          if (txtFirstNumberValue == "A")
           txtFirstNumberValue = 9;
	      if (txtFirstNumberValue == "B")
           txtFirstNumberValue = 8;
	      if (txtFirstNumberValue == "C")
           txtFirstNumberValue = 7;
	      if (txtFirstNumberValue == "D")
           txtFirstNumberValue = 6;
	      if (txtFirstNumberValue == "E")
           txtFirstNumberValue = 5;
	      if (txtFirstNumberValue == "F")
           txtFirstNumberValue = 5;
	      if (txtFirstNumberValue == "X")
           txtFirstNumberValue = 0;

       return txtFirstNumberValue;
       
   }



     function clear_form()
     {
        $("#fname").val('');
		$("#mname").val('');
        $("#lname").val('');
       }


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
        $("#Grade").val('');
		$("#sem").val('');
        $("#GradePoints").val('');
		$("#USN").val('');
		$("#cid").val('');
     }


});

</script>

</head>
<body style="background-image: url(grade.jpg);use oncontextmenu="return false;">
<form method="post" action="seenext.php">
<div id="bodyfull">
<br><br><br><br><br><br><br><br><br><br>
<div id="bodyfull2">
<h1 align="center" color="FF0000">Semester Details</h1>
	<div id="center">

		<div class="inner_right_demo"> 
		<form name="register" action="#null" method="post" id="register">
		
		
			<div class="form_box" >
					      <div>
							<label>Grade</label>
							   <select name="Grade" id="gra">
							    <option value="S">S</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="F">F</option>
								<option value="X">X</option>
								</select>
								<br><br><br>
						     </div>
				
				<div>
					<label>Semester</label>
					<input type="number" placeholder="  eg: 6  " id="sem" name="sem" min="1" max="8" required/><br><br><br>
				</div>
				
				<div>
					<label>Grade points</label>
					<input type="number" placeholder="  eg: 10  " id="gradepoints" name="GradePoints" min="0" max="10" required/><br><br><br>
				</div>
				
				
				
					
				<div>
					<label>USN</label>
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
					<label>Course ID</label>
							<SELECT name="cid"> <OPTION VALUE=0>Choose
								<?php 
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "student_expertize";
									// Create conection
								 $con = new mysqli($servername, $username, $password, $dbname);
								 $result = mysqli_query($con,"SELECT cid FROM course");
								 while($row = mysqli_fetch_array($result))
								 {
								  $Cid=$row["cid"];
								  echo '<OPTION VALUE=\'' . $Cid . '\'>'.$Cid.'</OPTION>';
								  }
								  mysqli_close ($con); //stranger conection till DB system;
								 ?>
								 </select>
					</div>
				
				
				
				
								
				<div>
				<form name="myForm" action="seenext.php" onsubmit="return validateForm()" method="post">
					<label>&nbsp; &nbsp;</label>
					<div class="otherinputs" ><input type="submit" value="Submit" name="B1" class="submit">&nbsp; &nbsp;<input type="reset" value="Reset" name="B2" class="submit"></div>
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