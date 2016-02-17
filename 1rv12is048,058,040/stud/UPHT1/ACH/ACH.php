<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Student Achievement Details</title>
<meta name="title" content="Student Achievement  Details"/>
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
        $("#AchievementType").val('');
		$("#AchievementName").val('');
        $("#AchievementLevel").val('');
		$("#Rank").val('');
		$("#USN").val('');
        
     }


});

</script>

</head>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$USN= $_POST ['USN'];
$sql = 'SELECT*FROM achievements';

mysql_select_db('student_expertize');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
?>
<h1 align="center" color="FF0000">Displaying Achievement Details for <?php echo $USN;?></h1>
<br><br><br>
<?php
while($row = mysql_fetch_array($retval))
{
		if(($row["USN"]==$USN))
		{

    echo "USN:{$row['USN']}  <br> ".
         "Achievement Type: {$row['AchievementType']} <br> ".
		 "Achievement Name: {$row['AchievementName']} <br> ".
		 "Achievement Level: {$row['AchievementLevel']} <br> ".
		 "Rank: {$row['Rank']} <br> ".
         "--------------------------------<br>";

		}
} 
	 

?>


<body use oncontextmenu="return false;">
<form method="post" action="ACH2.php">
<div id="bodyfull">
<br><br><br><br><br><br><br><br><br><br>
<div id="bodyfull2">
<h1 align="center" color="#DF013A"  >Student Achievement Details</h1>
	<div id="center">
<a href="index.html"><input type="submit" value="Home"></a>
		<div class="inner_right_demo"> 
		<form name="register" action="#null" method="post" id="register">
			<div class="form_box">
				
				
				<div>
					<label>Achievement Type</label>
					<select name="AchievementType" id="AchievementType" required="required">
							   
								<option value="Sports">Sports</option>
								<option value="Internship">Internship</option>
								<option value="Project">Project</option>
								<option value="Mini-Project">Mini-Project</option>
								<option value="Paper publishment">Paper publishment</option>
								<option value="Seminar">Seminar</option>
								<option value="Technical Talk">Technical Talk</option>
								<option value="Workshop">Workshop</option>
								<option value="Conference">Conference</option>
								<option value="Extra-curricular activities">Extra-curricular activities</option>
								<option value="Other">Other</option>
								</select>
					
					
				</div>
				<div>
					<label>Achievement Name</label>
					<input type="text" placeholder=" eg:cricket/company name/project name " id="AchievementName" name="AchievementName" maxlength="50" size="50" onkeypress="return onlyNumbers(event);" required="required">
				</div>
				
				<div>
					<label>Achievement Level</label>
					
					<input type="text" placeholder=" eg:state level/natioanal level " id="AchievementLevel" name="AchievementLevel" maxlength="50" size="50" onkeypress="return onlyNumbers(event);" required="required">
				</div>
				
				<div>
					<label>Rank</label>
					<select name="Rank" id="Rank" required="required">
							   
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="other">OTHER</option>
								
								</select>
					 
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
				<form name="myForm" action="ACH2.php" onsubmit="return validateForm()" method="post">
					<label>&nbsp; &nbsp;</label>
					<div class="otherinputs" >
					<input type="submit" value="Submit" name="B1" class="submit">&nbsp;
					<input type="reset" value="Reset" name="B2" class="submit">&nbsp;<br><br>
					</div>
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