


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
$USN= $_POST ['USN'];
$Fid= $_POST ['Fid'];
$batch= $_POST ['batch'];
$sql = "INSERT INTO counsels(USN,Fid,batch)
VALUES ('$USN','$Fid','$batch')";

if ($conn->query($sql) === TRUE) {
    header('location: sub.html');
	
} else {
   header('location: err.html');
	}

$conn->close();
?>
