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
$sql = 'SELECT * FROM achievements';

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



	
</body>
</html>

