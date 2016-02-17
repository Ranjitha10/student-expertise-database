


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
$Name= $_POST ['Name'];
$Fid= $_POST ['Fid'];
$Designation= $_POST ['Designation'];
$Qualification= $_POST ['Qualification'];
$YearOfJoining= $_POST ['YearOfJoining'];

$sql = "INSERT INTO counsellor (Name,Fid,Designation,Qualification,YearOfJoining)
VALUES ('$Name','$Fid','$Designation','$Qualification','$YearOfJoining')";

if ($conn->query($sql) === TRUE) {
   header('location: sub.html');
	
} else {
    header('location: err.html');
	
}

$conn->close();
?>
