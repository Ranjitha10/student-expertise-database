<HTML>
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
$USN= $_POST ['USN'];
$sem= $_POST ['sem'];
$sql = 'SELECT*
FROM student
JOIN student_address2
    ON student.USN = student_address2.USN
JOIN feedetails
    ON student.USN = feedetails.USN
JOIN guardian
    ON student.USN =guardian.USN
 JOIN 	see
    ON student.USN = see.USN';

mysql_select_db('student_expertize');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval))
{
		if(($row["USN"]==$USN))
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
		$ResedentialStatus =$row["ResedentialStatus"];
		$NCC=$row["NCC"];
		$DOB =$row["DOB"];
		$BloodGroup =$row["BloodGroup"];
		$Dno=$row["Dno"];
		$Cross_Num=$row["Cross_Num"];
		$Main=$row["Main"];
		$Street=$row["Street"];
		$City =$row["City"];
		$District=$row["District"];
		$State  =$row["State"];
		$pin=$row["pin"];
		$ChallanNumber=$row["ChallanNumber"];
		$Amount =$row["Amount"];
		$Feedate=$row["Feedate"];
		$cid =$row["cid"];
		 $GradePoints=$row["GradePoints"]; 
		$Grade=$row["Grade"];
		$Relationship=$row["Relationship"];
		$GuardianName=$row["GuardianName"];
		$GuardianEmailId=$row["GuardianEmailId"];
		$GuardianPhone=$row["GuardianPhone"];
		}
} 
	 

?>

<h1 align="center" color="FF0000">COUNSELLOR FORM GENERATION</h1>
<br><br><br><br><br><br><br><br>

	
<div>		

<label>USN:</label><?php echo $USN;?>
</div>
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
<label>Resedential Status:</label><?php echo $ResedentialStatus;?>
</div>
<div>
<label>DOB:</label><?php echo $DOB;?>
</div>
<div>
<label>Blood Group:</label><?php echo $BloodGroup;?>
</div>
<div>
<label>Willing to join NCC:</label><?php echo $NCC;?>
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
<div>

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
<label>Guardian Phone:</label><?php echo $GuardianPhone;?><br><br><br>
</div>


<h2>Fee Details:</h2>

<div>







<label>Challan Number:</label><?php echo $ChallanNumber;?>
</div>
<div>
<label>Amount:</label><?php echo $Amount;?>
</div>
<div>
<label>Fee date:</label><?php echo $Feedate;?>
</div>
<h2>Academic Details:</h2>
<div>

<label>course id:<label><?php echo $cid;?>
</div>
<div>
<label>Grade Points:</label><?php echo $GradePoints;?>
</div>
<div>
<label>Grade:</label><?php echo $Grade;?>
</div>



</html>
</body>
