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
$AchievementName= $_POST ['AchievementName'];
$sql = 'SELECT*
FROM student
JOIN achievements
    ON student.USN = achievements.USN';

mysql_select_db('student_expertize');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
?>
<h1 align="center" color="FF0000">Displaying Achievement Details for <?php echo $AchievementName;?></h1>
<br><br><br>
<?php
while($row = mysql_fetch_array($retval))
{
		if(($row["AchievementName"]==$AchievementName))
		{
		echo "USN:{$row['USN']}  <br> ".
         "Name: {$row['Fname']} <br> ".
         "Achievement Type: {$row['AchievementType']} <br> ".
		 "Achievement Name: {$row['AchievementName']} <br> ".
		 "Achievement Level: {$row['AchievementLevel']} <br> ".
		 "Rank: {$row['Rank']} <br> ".
         "--------------------------------<br>";
		}
} 
	 

?>



	

</html>
</body>
