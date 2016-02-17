<html>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

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
		$USN=$row["USN"];
		echo "Fetched data successfully\n";
}		


?>

<label>USN<label><?php echo $USN;?>
</BODY>
</HTML>
