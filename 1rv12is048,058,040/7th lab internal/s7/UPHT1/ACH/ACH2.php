
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
$AchievementType= $_POST ['AchievementType'];
$AchievementName= $_POST ['AchievementName'];
$AchievementLevel= $_POST ['AchievementLevel'];
$Rank= $_POST ['Rank'];

$sql = "UPDATE achievements SET USN='$USN',AchievementType='$AchievementType',AchievementName='$AchievementName',AchievementLevel='$AchievementLevel',Rank='$Rank' ";

mysql_select_db('student_expertize');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

if ($conn->query($sql) === TRUE) {
    echo "									THANK YOU!!!!
							YOUR SUBMISSION HAS BEEN UPDATED SUCCESSFULLY.
	
	";

?>
