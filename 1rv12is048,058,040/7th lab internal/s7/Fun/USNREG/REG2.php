<HTML>
<TITLE>SUBMISSION</TITLE>
<BODY>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$Fname= $_POST ['Fname'];
$sql = 'SELECT*

FROM student 
JOIN student_address2
    ON student.USN = student_address2.USN
JOIN guardian
    ON student.USN =guardian.USN
	';
 mysql_select_db('student_expertize');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval))
{
	if(($row["Fname"]==$Fname))
	{
		$USN=$row["USN"];
		$Fname=$row["Fname"];
		$EmailID=$row["EmailID"];
		$PhoneNum =$row["PhoneNum"]; 
		$Sex =$row["Sex"];
		$NatureOfAdmission =$row["NatureOfAdmission"];
		$CET_COMEDK_Rank =$row["CET_COMEDK_Rank"];
		$YearOfAdmission=$row["YearOfAdmission"];
		$Branch=$row["Branch"];
		$DOB =$row["DOB"];
		$Dno=$row["Dno"];
		$Cross_Num=$row["Cross_Num"];
		$Main=$row["Main"];
		$Street=$row["Street"];
		$City =$row["City"];
		$District=$row["District"];
		$State  =$row["State"];
		$pin=$row["pin"];
		$Relationship=$row["Relationship"];
		$GuardianName=$row["GuardianName"];
		$GuardianEmailId=$row["GuardianEmailId"];
		$GuardianPhone=$row["GuardianPhone"];
}
		
} 
?>

<h1 align="center" color="FF0000">Details for USN Registration</h1>
<br><br><br>

	

<div>
<label>Name:</label><?php echo $Fname;?>
</div>
<div>
<label>Email ID:</label><?php echo $EmailID;?>
</div>
<div>
<label>Phone Number:</label><?php echo $PhoneNum;?>
</div>
<div>
<label>Nature Of Admission:</label><?php echo $NatureOfAdmission;?>
</div>
<div>
<label>CET/COMEDK Rank:</label><?php echo $CET_COMEDK_Rank;?>
</div>
<div>
<label>Year Of Admission:</label><?php echo $YearOfAdmission;?>
</div>
<div>
<label>Branch:</label><?php echo $Branch;?>
</div>

<div>
<label>DOB:</label><?php echo $DOB;?>
</div>

<div>
<h2>Address:</h2>
</div>
<div>
<label>Dno:</label><?php echo $Dno;?>
</div>
<div>
<label>Cross Number:</label><?php echo $Cross_Num;?>
</div>
<div>
<label>Main:</label><?php echo $Main;?>
</div>
<div>
<label>Street:</label><?php echo $Street;?>
</div>
<div>
<label>City:</label><?php echo $City;?>
</div>
<div>
<label>State:</label><?php echo $State;?>
</div>
<div>
<label>pin:</label><?php echo $pin;?><br><br>
</div>
<h2>Guardian Details:</h2>
</div>
<div>
<label>Guardian Name:</label><?php echo $GuardianName;?>
</div>
<div>
<label>Relationship with the student:</label><?php echo $Relationship;?>
</div>
<div>
<label>Guardian EmailId:</label><?php echo $GuardianEmailId;?>
</div>
<div>
<label>Guardian Phone:</label><?php echo $GuardianPhone;?>
</div>


</html>
</body>
 
