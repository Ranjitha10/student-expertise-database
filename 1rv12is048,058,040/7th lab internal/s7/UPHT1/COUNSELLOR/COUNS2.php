


<?php
$servername = "localhost";
$username = "root";
$password = "";
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

$sql ="UPDATE achievements SET Name='$Name',Fid='$Fid',
		Designation='$Designation',Qualification='$Qualification',YearOfJoining='$YearOfJoining' ";

if ($conn->query($sql) === TRUE) {
    echo "
											THANK YOU!!!!
							YOUR SUBMISSION HAS BEEN UPDATED SUCCESSFULLY.
	";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
