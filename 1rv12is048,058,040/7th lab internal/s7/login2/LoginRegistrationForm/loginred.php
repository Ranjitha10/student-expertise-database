


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student_expertize";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username= $_POST ['username'];
$password= $_POST ['password'];
$sql = "SELECT*
FROM signup";
mysql_select_db('student_expertize');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval))
{
	if(($row["username"]==$username||$row["email"]==$username))
	{
		if($row["password"]==$password)
		{
				
		}
		else
		{
			echo "invalid username/email/password";
$conn->close();
?>
