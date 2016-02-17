<HTML>
<BODY>
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
$infotype= $_POST ['infotype'];	
$str1='studentbasicinformation';
$str2='counsellorfaculty';
$str3='courses';
						
if(strcmp($infotype,$str1))	{
	//echo "hello";
$sql = 'SELECT * FROM student';
mysql_select_db('student_expertize');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval))
{
		$USN=$row["USN"];
		$Fname=$row["Fname"];
		$Mname=$row["Mname"];
		$Lname=$row["Lname"];
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
		$Admission_Number=$row["Admission_Number"];
		$Income=$row["Income"];
		$CasteCategory=$row["CasteCategory"];
		
}
} 
?>

<br><br><br><br><br><br><br><br>
<div>		
<label>USN:</label><?php echo $USN;?>
</div>
<div>
<label>Fname:</label><?php echo $Fname;?>
</div>
<div>
<label>Mname:</label><?php echo $Fname;?>
</div>
<div>
<label>Lname:</label><?php echo $Fname;?>
</div>
<div>
<label>EmailID:</label><?php echo $EmailID;?>
</div>
<div>
<label>PhoneNum:</label><?php echo $PhoneNum;?>
</div>
<div>
<label>Gender:</label><?php echo $Sex;?>
</div>
<div>
<label>NatureOfAdmission:</label><?php echo $NatureOfAdmission;?>
</div>
<div>
<label>CET_COMEDK_Rank:</label><?php echo $CET_COMEDK_Rank;?>
</div>
<div>
<label>YearOfAdmission:</label><?php echo $YearOfAdmission;?>
</div>
<div>
<label>Branch:</label><?php echo $Branch;?>
</div>

<div>
<label>AdmissionNumber:</label><?php echo $Admission_Number;?>
</div>
<div>
<label>ResedentialStatus:</label><?php echo $ResedentialStatus;?>
</div>

<div>
<label>NCC:</label><?php echo $NCC;?>
</div>

<div>
<label>DOB:</label><?php echo $DOB;?>
</div>
<div>
<label>BloodGroup:</label><?php echo $BloodGroup;?>
</div>
<div>
<label>Income:</label><?php echo $Income;?>
</div>
<div>
<label>Willing to join NCC:</label><?php echo $NCC;?>
</div>	
					

						<!--
								
								
								
						}
						elseif($infotype=="courses"){
								$strSQL="SELECT * FROM course ";
								
								
								
						}
						elseif($infotype=="counsellor")
					{
								$strSQL="SELECT * FROM counsels where USN='$USN'";
								$retval = mysql_query( $strSQL, $conn );
						
						if ($conn->query($rs) === TRUE){						
						
							while($row = mysql_fetch_array($rs)) {
							echo $row['FUSN']. "<br />";;
							}												
						}
						 else {
							echo "Error: " . $rs . "<br>" . $conn->error;
						}							
					}
						elseif($infotype=="fee"){
								$strSQL="SELECT * FROM feedetails where USN='$USN'";
								
								
								
						}
						elseif($infotype=="cocurricular"){
								$strSQL="SELECT * FROM club where USN='$USN'";
								
								
						}
						elseif($infotype=="hss"){
								$strSQL="SELECT * FROM hss where USN='$USN'";
								
								
						}
						elseif($infotype=="achievements"){
								$strSQL="SELECT * FROM achievements where USN='$USN'";
								
						
						}
						elseif($infotype=="see"){
								$strSQL="SELECT * FROM see where USN='$USN'";
						
						
						}
						elseif($infotype=="address"){
								$strSQL="SELECT * FROM student_address2 where USN='$USN'";
						
						
						}elseif($infotype=="guardian"){
								$strSQL="SELECT * FROM guardian where USN='$USN'";
								
						-->		
						

</HTML>
</BODY>
